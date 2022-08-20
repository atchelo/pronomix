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

        //dd($rep);




        session([
            'token' => $rep['new_token'],
            'current_user' => $rep['data'],
        ]);

        $infos =  $rep['data'];
        $liste_pays = session('list_pays');
        $islogged =  session('current_user');
        //dd($liste_pays);
        return view('pers_info', compact('infos', 'liste_pays', 'token', 'islogged'));
    }

    public function pwd_modif(){
        $token = session('token');
        $islogged = session('current_user');
        return view('pwd_modif', compact('token', 'islogged'));
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

        $info_livraison = session('info_livraison');

        $islogged = session('current_user');

        $colis = session('suivi_coli')['data'];

        //dd($colis);

        return view('suivi_coli', compact('colis', 'token', 'islogged', 'info_livraison'));
    }

    public function rejeter_lot(Request $request){
        session([
            'token' => $request->new_token
        ]);
        return $request->message;
    }

    public function rejeter_lot_success(Request $request){

        $balance_tickets  = str_replace(' ', '', $request->user['balance_tickets']);
        $balance_points = str_replace(' ', '', $request->user['balance_points']);

        session([
            'token' => $request->new_token,
            'current_user.balance_tickets' => $balance_tickets,
            'current_user.balance_points' => $balance_points,
        ]);
        return $request->message;
    }

    public function info_livraison(Request $request){
        /*$nom_prenom = $request->response['nom_user'] . ' '. $request->response['prenom'];
        $indicatif = '+' . $request->response['indicatif'] . '('. ($request->response['nom_pays']) . ')';
        $pays_id = $request->response['pays_id'];
        $numero_tel = $request->response['msisdn'];
        $description = $request->response['description'];*/

        /*$data = [
          'nom_prenom' =>   $nom_prenom,
            'indicatif' => $indicatif,
            'numero_tel' => $numero_tel,
            'description' => $description,
            'pays_id' => $pays_id
        ];*/

       // return $data;

        session([
            'token' => $request->new_token,
        ]);
        return $request->message;
    }
}
