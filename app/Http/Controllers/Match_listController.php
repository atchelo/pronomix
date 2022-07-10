<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Match_listController extends Controller
{
    public function getAll(Request $request){

       $get_match = session('list_match');
      //dd($get_match);
       $token = session('token');
        return view('match_list', compact('get_match', 'token'));
    }
    public function storeAll(Request $request){
        session()->forget([
            'list_match',
            'token'
        ]);

        session([
            'list_match' => $request['match_data'],
            'token' => $request['new_token'],
        ]);

        return route('allmatch');
    }

    public function getDetails(){
        $get_detmatch = session('details_match');

        $token = session('token');

        $test = session('user_pronos_multi');

        //dd($get_detmatch);

        $get_curuser = session('current_user');

        $ticket_numb = intval($get_curuser['balance_tickets']);

        return view('detail_match', compact('get_detmatch', 'ticket_numb', 'token'));
    }

    public function storegetDetails(Request $request){
        session()->forget([
            'details_match',
        ]);

        session([
            'details_match' => $request['detail_match_data'],
        ]);
        return route('detmatch');
    }

    public function pronostiquer(Request $request){
        session()->forget([
            'token'
        ]);

        session([
            'token' => $request['new_token'],
            'user_pronos' => $request['data_reg'],
            'current_user.balance_tickets' => $request['data_reg']['user_new_balance']
        ]);

        $data = [
            "status" => 'success',
            "message" => 'Votre pronostic a bien été enregistré!'
            ];

        return $data;

    }

    public function pronostiquer_multi(Request $request){
        session()->forget([
            'token'
        ]);

        session([
            'token' => $request['new_token'],
            'user_pronos_multi' => $request['data_reg'],
        ]);

        $data = [
            "status" => 'success',
            "message" => "Pronostique ajoute"
        ];

        return $data;

    }

    public function get_coup_pron(){
        $pron_coups = session('user_pronos_multi');
        $token = session('token');
        //dd($pron_coups);
        return view('pron_coup', compact('pron_coups', 'token'));
    }

    public function sup_coup_pron(Request $request){

        session()->forget([
            'token',
            'user_pronos_multi'
        ]);

        session([
            'token' => $request['new_token'],
            'user_pronos_multi' => $request['data_reg'],
        ]);

        $data = [
            "status" => 'success',
            "message" => $request['message']
        ];

        return $data;

    }

    public function vid_coup_pron(Request $request){
        session()->forget([
            'token',
            'user_pronos_multi'
        ]);
        session([
            'token' => $request['new_token'],
        ]);
        $data = [
            "message" => $request["message"],
        ];
        return $data;
    }

    public function sais_code_coupon(Request $request){
        session()->forget([
            'token',
        ]);
        session([
            'token' => $request['new_token'],
        ]);
        $data = [
            "message" => $request["message"],
            "status" => $request["status"],
        ];
        return $data;
    }

    public function gen_code_coupon(Request $request){
        session()->forget([
            'token',
        ]);
        session([
            'token' => $request['new_token'],
        ]);
        $data = [
            "message" => $request["message"],
            "status" => $request["status"],
            "code" => $request["code"],
            "link" => $request["link"],
        ];
        return $data;
    }

}
