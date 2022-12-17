<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users=User::get();
        return view('Dashbord.User.index',compact('Users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbord.User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



    $validated = $request->validate([
            'email'=>'unique:users',
            'password' => 'required|same:password_confirmation|min:6',

        ]);


        if($request->img)
        {
           $img=time(). '.' .$request->img->extension();
           $request->img->move(public_path('User'),$img);
        }
        
        $games=User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'img'=>$img,
            'password'=>Hash::make($request['password']),
         ]);
         
        return redirect()->route('user.index')->with('success','تم اضافه العضو بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('Dashbord.User.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User=User::find($id);
        return view('Dashbord.User.update',compact('User'));
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
        $User=User::find($id);

        if($request->img == '' || $request->img== null)
        {
           $img=$User->img;

        }
        else{

            $img=time(). '.' .$request->img->extension();
            $request->img->move(public_path('User'),$img);
 
        }
        $User->update([

            'name'=>$request['name'],
            'email'=>$request['email'],
            'img'=>$img,
            'password'=>$request['password'],

        ]);
        return redirect()->route('user.index')->with('success','تم تعديل العضو بنجاح');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User=User::find($id);
        $User->delete();
        return redirect()->route('user.index')->with('success','تم حذف العضو بنجاح');
    }
}
