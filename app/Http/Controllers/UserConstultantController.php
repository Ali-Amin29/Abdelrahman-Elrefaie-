<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserConstultant;
use Illuminate\Http\Request;

class UserConstultantController extends Controller
{
    public function create(Request $request)
{
        // dd($request);
        if($request->Result == 'Successful')
       {

           $request=UserConstultant::create(
            [
                'id'=>$request->PaymentId,
                'price'=>$request->amount,
                'name'=>$request->UserField1,
                'email'=>$request->UserField5,
                'typeOfConstultant'=>$request->UserField3,
                'token'=>$request->TranId,
            ]);
       }
        session_unset();
        return redirect()->route('index');


}
public function show()
{
        $constultant = UserConstultant::get();
        return view('Dashbord.consultant.index', compact('constultant'));
}
}