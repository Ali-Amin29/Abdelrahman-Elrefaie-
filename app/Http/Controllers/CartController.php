<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ConsultingNotCompolete;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart');
    }


    public function session(Request $request)
    {
        session_start();
        if (isset($_SESSION['order'])) {

            $consult = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'consult' => $request->consult,
                'consult_type' => $request->consult_type,
                'consult_loyar' => $request->consult_loyar,
                'time' => $request->time,
                'price' => $request->price,
                'date' => $request->date,
                'consult_type_two'=>$request->consult_type_two
            ];

                array_push($_SESSION['order'], $consult);


        } else {
            $consult = array([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'consult' => $request->consult,
                'consult_type' => $request->consult_type,
                'consult_loyar' => $request->consult_loyar,
                'time' => $request->time,
                'price' => $request->price,
                'date' => $request->date,
                'consult_type_two'=>$request->consult_type_two
            ]);
            $_SESSION['order'] = $consult;
        }

        return redirect()->route('cart');
    }

    public function delete($delete)
    {
        session_start();

        unset($_SESSION['order'][$delete]);

        return redirect('cart');

    }

    public function session_done(Request $request)
    {
        session_start();
        $ahmed=$_SESSION['order'];

        $i = 0;

        for ($i ; $i < count($ahmed);  ) {
                if(!isset($ahmed[$i]))
                {
                    for ($j = 0; $j < 1; $j++) {
                        $i++;
                    }
                }
                else {
                if ($ahmed[$i]['consult_loyar'] == "الاستشاره السريعه") {
                    $type = $ahmed[$i]['consult_type'] = "سريع";

                } elseif ($ahmed[$i]['consult_loyar'] == "محامي" or $ahmed[$i]['consult_loyar'] == "مستشار" or $ahmed[$i]['consult_loyar'] == "محامي مستشار متمرس") {
                    $type = $ahmed[$i]['consult_type'] = "الهاتف";

                } elseif ($ahmed[$i]['consult_loyar'] == "الاستشاره بالبريد") {
                    $type = $ahmed[$i]['consult_type'] = "الهاتف";

                }

                $i++;
            }

        }

        return redirect()->route('paymentSend');

    }




}
