<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(Request $request){


        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }


        $response = Http::post('https://demo.pronomix.net/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

       $rep = json_decode($response->body(), true);

       //dd($rep);

       if ($rep['success'] === true){
           session([
               'islogged' => 1,
               'current_user' => $rep['user'],
               'token' => $rep['token'],
           ]);
           return redirect()->route('home');
       }else{
           return redirect()->back()->with([
               'error' => $rep['message']
           ]);
       }

    }
}
