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

        $responseP = Http::get("https://demo.pronomix.net/api/pays/liste");
        $repP = json_decode($responseP->body(), true);

        if ($repP['success'] === true){
            session([
                'list_pays' => $repP['data']
            ]);
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

           $token = session('token');

           $response2 = Http::get("https://demo.pronomix.net/api/matchs-disponibles/liste/search=&filtre_date=?token=$token");

           $rep2 = json_decode($response2->body(), true);

           //dd($token);

           session()->forget([
               'list_match',
               'token'
           ]);

           session([
               'list_match' => $rep2['data'],
               'token' => $rep2['new_token'],
           ]);

           return redirect()->route('home');
       }else{
           return redirect()->back()->with([
               'error' => $rep['message']
           ]);
       }

    }
}
