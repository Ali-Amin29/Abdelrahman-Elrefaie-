<?php

namespace App\Http\Controllers;

use App\Models\UserComplain;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserComplainController extends Controller
{
    public function create(Request $request)
    {
            $request = UserComplain::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'description' => $request->content,
                    'subject' => $request->subject,
                    'response' => 'waiting',
                    'is_active'=>false
                ]
            );
            session_unset();
            return redirect()->route('index')->with('تم ارسال الشكوي وجاري التعامل معاها ......');

    }
    public function show()
    {
            $complains = UserComplain::get();

        return view('Dashbord.complain.index', compact('complains'));

    }
    public function update(Request $request, $id)
    {
        // dd($request->response);
            $complain = UserComplain::find($id);

            $complain->update([
                'response' => $request->response,
                'is_active' => true,
            ]);
            $complain->save();
            return redirect()->route('index')->with('success','تم الرد علي الشكوي بنجاح');

    }
    public function edit($id)
    {
        $complain=UserComplain::find($id);
        return view('Dashbord.complain.update',compact('complain'));
    }
    public function done()
    {
        $complain=UserComplain::get()->where('is_active', true);
        return view('Dashbord.complain.done',compact('complain'));

    }
}