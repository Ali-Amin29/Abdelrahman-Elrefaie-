<?php

namespace App\Http\Controllers;

use Alaaelsaid\LaravelUrwayPayment\Facade\UrwayProcess;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(){

        session_start();
        $res=[];
        $ahmed=$_SESSION['order'];
        $i = 0;
        // last key found
        $last_key=array_key_last($ahmed);
        //  check if order is already exists
        for ($i ; $i <= $last_key;  ) {
            if(!isset($ahmed[$i]))
            {
                for ($j = 0; $j <  1 ; $j++) {
                    $i++;
                }
            } else {
                $email = $ahmed[$i]['email'];
                $name = $ahmed[$i]['name'];
                if ($ahmed[$i]['consult_type'] == "سريع") {
                    $type = 'fast';

                } elseif ($ahmed[$i]['consult_type'] == "الهاتف" ) {
                    $type = 'phone';


                }
                elseif ($ahmed[$i]['consult_type'] == "البريد" ) {
                    $type = 'mail';


                }

                array_push($res, $ahmed[$i]['price']);
                $i++;
            }
        }
        // sum of price Constulting
        $result_price = 0;
        for ($key=0 ; $key < count($res) ; $key++)
        {
            $result_price += $res[$key];
        }
        // Method get way
       $payment_url=UrwayProcess::getPaymentUrl([
           'trackid' => rand(),
           'email' => $email,
           'amount' => $result_price,
           'udf5'=>$email,
           'udf1'=>$name,
           "udf3"=>$type,
           'redirect_url' =>'http://update-12-14.test/getData', // put your redirect url here, feel free to use url() method,
       ]);
       return redirect($payment_url); // this is for example !!
       }
}