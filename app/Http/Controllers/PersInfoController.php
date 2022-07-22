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
        return view('pwd_modif');
    }

    public function suivi_coli(){
        return view('suivi_coli');
    }
}
