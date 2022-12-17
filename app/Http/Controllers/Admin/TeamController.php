<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $teams=Team::get();

        return view('Dashbord.Team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbord.Team.create');
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
           $request->img->move(public_path('Team'),$img);
        }

        $Teams=Team::create([
            'name'=>$request['name'],
            'birth'=>$request['birth'],
            'work_qualifications'=>$request['work_qualifications'],
            'training_courses'=>$request['training_courses'],
            'experience'=>$request['experience'],
            'literature'=>$request['literature'],
            'img'=>$img,
            'title'=>$request['title'],
         ]);

        return redirect()->route('team.index')->with('success','تم اضافه العضو بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team=Team::find($id);
        return view('Dashbord.Team.show',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team=Team::find($id);
        return view('Dashbord.Team.update',compact('team'));
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
        $Team=Team::find($id);

        if($request->img == '' || $request->img== null)
        {
           $img=$Team->img;

        }
        else{

            $img=time(). '.' .$request->img->extension();
            $request->img->move(public_path('Team'),$img);

        }
        $Team->update([

            'name'=>$request['name'],
            'birth'=>$request['birth'],
            'work_qualifications'=>$request['work_qualifications'],
            'training_courses'=>$request['training_courses'],
            'experience'=>$request['experience'],
            'literature'=>$request['literature'],
            'img'=>$img,
            'title'=>$request['title'],

        ]);
        return redirect()->route('team.index')->with('success','تم تعديل العضو بنجاح');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Team=Team::find($id);
        $Team->delete();
        return redirect()->route('team.index')->with('success','تم حذف العضو بنجاح');
    }
}
