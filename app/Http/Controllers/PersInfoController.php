<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PersInfoController extends Controller
{
    public function infos(){
        $token = session('token');
        $response = Http::get("https://demo.pronomix.net/api/user-informations",

            [
                'token' => $token,
            ]);
        $rep = json_decode($response->body(), true);

        //s dd($rep);

        session([
            'token' => $rep['new_token'],
            'current_user' => $rep['data'],
        ]);

        $infos =  $rep['data'];
        $liste_pays = session('list_pays');
        //dd($liste_pays);
        return view('pers_info', compact('infos', 'liste_pays', 'token'));
    }

    public function pwd_modif(){
        $token = session('token');
        return view('pwd_modif', compact('token'));
    }

    public function pwd_store(Request $request){
        session([
            'token' => $request->new_token,
        ]);
        $message = $request->message;
        return $message;
    }

    public function suivi_coli(){

        $token = session('token');
        $response = Http::post("https://demo.pronomix.net/api/user/suivi-colis",

            [
                'token' => $token,
            ]);
        $rep = json_decode($response->body(), true);

        if ($rep['success'] === true){
            session([
                'token' => $rep['new_token'],
                'suivi_coli' => $rep['response'],
            ]);
        }

        $colis = session('suivi_coli')['data'];

        dd($colis);

        return view('suivi_coli', compact('colis'));
    }
}
