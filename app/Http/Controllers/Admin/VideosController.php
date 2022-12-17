<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos=Video::get();
        return view('Dashbord.videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbord.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->img)
        {
           $img=time(). '.' .$request->img->extension();
           $request->img->move(public_path('videos'),$img);
        }
        
        $videos=Video::create([
            'title'=>$request['title'],
             
            'img'=>$img,
            'link'=>$request['link'],
         ]);
        return redirect()->route('video.index')->with('success','تم اضافه الفديو بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video=Video::find($id);
        return view('Dashbord.videos.show',compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video=Video::find($id);
        return view('Dashbord.videos.update',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video=Video::find($id);

        if($request->img == '' || $request->img== null)
        {
           $img=$video->img;

        }
        else{

            $img=time(). '.' .$request->img->extension();
            $request->img->move(public_path('videos'),$img);

        }

        $video->update([

            'title'=>$request['title'],
             'img'=>$img,
            'link'=>$request['link'],

        ]);
        return redirect()->route('video.index')->with('success','تم تعديل الفديو بنجاح');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video=Video::find($id);
        $video->delete();
        return redirect()->route('video.index')->with('success','تم حذف الفديو بنجاح');
    }
}
