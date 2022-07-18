<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PersInfoController extends Controller
{
    public function infos(){
        $token = session('token');
        $all = session()->all();
        //dd($all);
        $response = Http::get("https://demo.pronomix.net/api/user-informations",

            [
                'token' => $token,
            ]);
        $rep = json_decode($response->body(), true);
        //dd($rep);

        session([
            'token' => $rep['new_token'],
            'current_user' => $rep['data'],
        ]);
        return view('pers_info');
    }
}
