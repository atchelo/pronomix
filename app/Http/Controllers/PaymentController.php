<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment_index(Request $request){

        $get_lot = session('list_lot');
        //dd($get_lot);
        $token = session('token');
        $islogged = session('current_user');

if (!isset($request->message)){
    return view('payment', compact('token', 'islogged', 'get_lot'));
}
    else{
        /*$message = $request->message;
        $amount = $request->amount;
        $payment_method = $request->payment_method;
        $reference = $request->reference;*/
        $data = [
            'message' => $request->message,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'reference' => $request->reference
        ];
        return view('payment', compact('token', 'islogged', 'get_lot', 'data'));
    }

    }

    public function payment_token_store(Request $request){
        session([
            'token' => $request->new_token
        ]);
        return true;
    }
}
