<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::get();
        return view('Dashbord.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbord.blog.create');
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
           $request->img->move(public_path('BLog'),$img);
        }
        
        $games=Blog::create([
            'title'=>$request['title'],
            'content'=>$request['content'],
            'img'=>$img,
            'link'=>$request['link'],
         ]);
        return redirect()->route('blog.index')->with('success','تم اضافه المقال بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog=Blog::find($id);
        return view('Dashbord.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        return view('Dashbord.blog.update',compact('blog'));
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
        $blog=Blog::find($id);
        
 
        if($request->img != ''){        
            $path = public_path().'/Blog/';
             
             
  
            //code for remove old file
            if($blog->img != ''  && $blog->img != null){
                 
                 $file_old = $path.$blog->img;

                 $ahmed=public_path()."/Blog/1671045168.jpg";
                 unlink($ahmed);
                //  unlink(public_path()."/1671045168.jpg");


                  dd($file_old);
                 unlink($file_old);
            }
  
            //upload new file
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
  
            //for update in table
            $employee->update(['file' => $filename]);
       }
  








        $blog->update([

            'title'=>$request['title'],
            'content'=>$request['content'],
            'img'=>$request['content'],
            'link'=>$request['link'],

        ]);
        return redirect()->route('blog.index')->with('success','تم تعديل المقال بنجاح');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::find($id);
        $blog->delete();
        return redirect()->route('blog.index')->with('success','تم حذف المقال بنجاح');
    }
}
