<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Match_listController extends Controller
{
    public function getAll(Request $request){

       //$get_match = session('list_match');

        $token = session('token');

        //dd($token);

        $response = Http::get("https://demo.pronomix.net/api/matchs-disponibles/liste/search=&filtre_date=",
            [
                'token' => $token,
            ]);
        $rep = json_decode($response->body(), true);

            //dd($rep);


        if ($rep['success'] === true){
            if (isset($rep['new_token'])){
                session([
                    'list_match' => $rep['data'],
                    'token' => $rep['new_token'],
                ]);
                $get_match = $rep['data'];
                $islogged = session('current_user');
                $token = session('token');
                return view('match_list', compact('get_match', 'token', 'islogged'));
            }else{
                return redirect()->back()->withErrors(['error' => 'The Message']);
            }
        }else{
            return redirect()->back()->withErrors(['error' => 'The Message']);
        }
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

        return 'ok';
    }

    public function getDetails(){

        session()->forget([
            'list_lot',
        ]);

        $get_detmatch = session('details_match');

        $token = session('token');

        $test = session('user_pronos_multi');

        //dd($get_detmatch);

        $islogged = session('current_user');

        $get_curuser = session('current_user');

        $ticket_numb = intval($get_curuser['balance_tickets']);

        return view('detail_match', compact('get_detmatch', 'ticket_numb', 'token', 'islogged'));
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
            "message" => $request->message
        ];

        return $data;

    }

    public function get_coup_pron(){
        session()->forget([
            'list_lot',
        ]);
        $pron_coups = session('user_pronos_multi');
        $islogged = session('current_user');
        $token = session('token');
        //dd($pron_coups);
        return view('pron_coup', compact('pron_coups', 'token','islogged'));
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

        if (empty($request['data_reg']['pronostics'])){
            $pron_array = 0;
        }else{
            $pron_array = count($request['data_reg']['pronostics']);
        }



        $data = [
            "status" => 'success',
            "message" => $request['message'],
            "cote" => number_format($request['data_reg']['cumul'],2),
            "pronostics" => $pron_array
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
            'user_pronos_multi' => $request['data_reg'],
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

    public function enr_sais_code_coupon(Request $request){
        session()->forget([
            'token',
        ]);
        session([
            'token' => $request['new_token'],
            'his_coupon' => $request['data'],
            'current_user.balance_tickets' => $request['data']['user_new_balance']
        ]);

        $data = [
            "message" => $request["message"],
            "status" => $request["status"],
        ];
        return $data;

    }

    public function historique_coupon(Request $request){
        if (isset($request->option)){
            $option = $request->option;
        }else{
            $option = '';
        }

        //dd($option);

         $token = session('token');
        $response = Http::get("https://demo.pronomix.net/api/historique-pronostics/reference_coupon=all_/status=$option?page=1",

            [
                'token' => $token,
            ]);
        $rep = json_decode($response->body(), true);
        //dd($rep);
        if (isset($rep['new_token'])){
            session([
                'list_hist' => $rep['pronostics'],
                'new_token' => $rep['new_token'],
            ]);
            $token = $rep['new_token'];
            $islogged = session('current_user');
            $hist_data = $rep['pronostics']['data'];
            $current_page = $rep['pronostics']['current_page'];
            $total_page = $rep['pronostics']['last_page'];
            $next_page = $rep['pronostics']['next_page_url'];
            return view('historique', compact('hist_data', 'token', 'islogged', 'current_page', 'total_page', 'next_page'));
        }else{
            return redirect()->back()->withErrors(['error' => 'The Message']);
        }
        //dd($rep['pronostics']);
    }

    public function historique_store(Request $request){

        //return $request;

        $check_hist = session('list_hist');

        //return $get_hist;

        if (!isset($check_hist['current_page'])){

            session()->forget([
                'list_hist',
            ]);

            session([
                'list_hist' => $request->hist_data,
            ]);

            return route('his_coup');
        }
        else{


            session([
                'list_hist' => $request->hist_data['pronostics'],
                'token' => $request->hist_data['new_token']
            ]);


            $perd_res = <<<HTML

<div class="badge-red"> Perdu </div>

HTML;
            $win_res = <<<HTML

<div class="badge-green"> Gagné </div>

HTML;
            $wait_res =  <<<HTML

<div class="badge-blue"> En Attente </div>

HTML;

            $if = function ($condition, $true, $false) { return $condition ? $true : $false; };

            //$if2 = function ($condition, $true, $false) { return $condition ? $true : $false; };

            $get_hist = session('list_hist');


            foreach ($get_hist['data'] as $index => $hist) {
//return $hist;
                if (isset($hist['reference_coupon'])) {
                    $html_hist[] = <<<HTML

               <div id="hist_pron" class="item" onclick="showdetails({$hist['reference_coupon']})" style="padding: 25px 24px; position: relative; overflow: hidden;">
                        <div class="detail">
                            <div>
                                <strong style="color: #11a44c;"> {$hist['type']} - N° {$hist['reference_coupon']} </strong>
                                <p class="small text-muted"><span><b></b> {$hist['date_created']} </span> - {$hist['mise_tickets']} Ticket(s)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" style="display: flex; justify-content: end">
                                    {$if($hist['pronostic_win'] === "lost", $perd_res, ' ')}
                                    {$if($hist['pronostic_win'] === "win", $win_res, ' ')}
                                    {$if($hist['pronostic_win'] === null, $wait_res, ' ')}
                            </div>
                            <div class="col-12" style="display: flex; justify-content: end">
                                <p>{$hist['gain_potentiel']} pts</p>
                            </div>
                        </div>
                    </div>


HTML;
                }
            }

            return  [
                $get_hist['current_page'],
                $html_hist,
            ];
        }
    }

    public function get_resultats(Request $request){

        $token = session('token');

        $response = Http::get("https://demo.pronomix.net/api/resultats/liste/search=all_/filtre_date=all_",

            [
                'token' => $token,
            ]);
        $rep = json_decode($response->body(), true);
        $islogged = session('current_user');
        if (isset($rep['data'][0])){
            if ($rep['success'] === true){
                session([
                    'result_pron' => $rep['data'],
                ]);

                $resus = session('result_pron');


                return view('resultats', compact('resus', 'token', 'islogged'));

            }
        }
    }

}
