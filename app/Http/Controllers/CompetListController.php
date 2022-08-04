<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CompetListController extends Controller
{
    public function getAll(Request $request){
        session()->forget([
            'list_lot',
        ]);
        session()->forget([
            'list_compet',
        ]);
        $response = Http::get("https://demo.pronomix.net/api/rencontres-competition/liste/search=all_");
        $rep = json_decode($response->body(), true);
        session([
            'list_compet' => $rep['data'],
        ]);
        $get_compet = $rep['data'];
        $token = session('token');
        $islogged = session('current_user');


        $current_page = $get_compet['current_page'];
        $total_page = $get_compet['last_page'];
        $next_page = $get_compet['next_page_url'];

        $compets = $rep['data']['data'];

        //dd($compets);

        /*foreach ($compets as $compet){
            foreach ($compet['rencontres'] as $index1 => $rencontre){
                if (isset($rencontre['bets_draw'])){
                    $renc[] = $rencontre['bets_draw'];
                }else{
                    dd($renc);
                }
            }
        }*/

        //dd($renc);

        return view('compet_list', compact('compets', 'token', 'islogged', 'current_page', 'total_page', 'next_page'));
    }

    public function storeAll(Request $request){


            session([
                'list_compet' => $request->list_compet['data'],
            ]);


            $if = function ($condition, $true, $false) { return $condition ? $true : $false; };


            $bg_color = <<<HTML

style="background-color: currentColor"

HTML;



$res1 = 1; $res2=2;

            $get_compet = session('list_compet');
            $i = $request->list_compet['data']['from'];

            foreach ($get_compet['data'] as $ind => $compet) {


                $index = $ind + $i;

                if (isset($compet['id_'])) {
                    $rencontres = ' ';
                    $rencontres1 = <<<HTML
<div class="alert alert-outline-dark mb-1" role="alert">
                                            <i class="fa fa-futbol-o"></i> Aucune rencontre disponible pour l'instant.
                                        </div>
HTML;

                    if(isset($compet['rencontres'])){
                        foreach ($compet['rencontres'] as $index1 => $rencontre){
                            $rencontres .= <<<HTML
                                        <div class="card-block mb-1" id="detmatch{$index1}" style="height: 135px; background-color: white" data-matchid="{$if(isset($rencontre['id_']), $rencontre['id_'], ' ')}" onclick="match({$rencontre['id_']})">
                                            <div class="section full" style="position: relative; text-align: center">
                                                <div class="in" style="padding: 0px">
                                                    <div class="titleCard__textWrapper" style="justify-content: space-between;color: #1e1e1e; overflow: hidden;
text-overflow: ellipsis;
display: -webkit-box;
-webkit-line-clamp: 1;
-webkit-box-orient: vertical;">
                                    <span class="titleCard__text" style="font-size: 12px">
                                        {$if(isset($rencontre['sport_icon']), $rencontre['sport_icon'], ' ')}  {$if(isset($rencontre['league_name']), $rencontre['league_name'], ' ')}
                                            ~ <span style="font-weight: normal; color: #6f6c6c;">{$if(isset($rencontre['league_round']), $rencontre['league_round'], ' ')}</span><br>
                                                                            </span>
                                                    </div>

                                                    <div class="container mt-1" style="background-color: rgba(255, 255, 255, 0.2); justify-content: space-between;height: 40px;border-radius: 10px;">
                                                        <div class="row">
                                                            <div class="col-3" style="padding: 0">
                                                                <div class="team_name" style="color: black; font-weight: bold; margin-top: 5px; text-align: center; overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 1;
           line-clamp: 2;
   -webkit-box-orient: vertical;">{$if(isset($rencontre['team_name_home']), $rencontre['team_name_home'], ' ')}</div>
                                                            </div>
                                                            <div class="col-2" style="padding: 0">
                                                                <img src="{$if(isset($rencontre['team_logo_home']), $rencontre['team_logo_home'], ' ')}" alt="logo" class="logo" style="width: 35px;height: 35px;">
                                                            </div>
                                                            <div class="col-2" style="padding: 0">
                                                                <div class="card" style="padding: 7px 0 7px 0; background-color: transparent">
                                                                    <div class="card-body" style="padding: 0">
                                                                        <div class="container" style="padding: 0px 5px 0px">

                                                                            <div class="row" >
                                                                                <div class="col" style="padding: 0">
                                                                                    <strong style="font-size: 20px; color: black" >{$if(isset($rencontre['hour']), $rencontre['hour'], ' ')}</strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!----<h6 class="card-title" style="margin-top: 10px;color: #11a44c">VS</h6>---->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2" style="padding: 0">
                                                                <img src="{$if(isset($rencontre['team_logo_away']), $rencontre['team_logo_away'], ' ')}" alt="logo" class="logo" style="width: 35px;height: 35px;">
                                                            </div>
                                                            <div class="col-3" style="padding: 0">
                                                                <div id="team_name" class="team_name" style="color: black; font-weight: bold; margin-top: 5px; text-align: center;overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 1;
           line-clamp: 2;
   -webkit-box-orient: vertical;">{$if(isset($rencontre['team_name_away']), $rencontre['team_name_away'], ' ')}</div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="padding: 0 50px;">
                                                            <div class="col" style="padding: 0">
                                                                <div class="" style="color: black;text-align: center; font-size: 10px">{$if(isset($rencontre['date']), $rencontre['date'], ' ')}</div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4" style="padding: 0">
                                                                <div class="coupon" style="color: black; text-align: center;  font-size: 10px">Victoire <span class="short_team_name">{$if(isset($rencontre['team_name_home']), $rencontre['team_name_home'], ' ')}</span> <span class="badge-green"> {$if(isset($rencontre['bets_home']['odd']), $rencontre['bets_home']['odd'], ' ')}</span></div>
                                                            </div>
                                                            <div class="col-4" style="padding: 0 3px">
                                                                <div class="coupon" style="color: black; text-align: center;  font-size: 10px">Match nul <span class="badge-green"> {$if(isset($rencontre['bets_draw']['odd']), $rencontre['bets_draw']['odd'], ' ')}</span></div>
                                                            </div>
                                                            <div class="col-4" style="padding: 0">
                                                                <div class="coupon" style="color: black; text-align: center;  font-size: 10px">Victoire <span class="short_team_name"> {$if(isset($rencontre['team_name_away']), $rencontre['team_name_away'], ' ')}</span> <span class="badge-green"> {$if(isset($rencontre['bets_away']['odd']), $rencontre['bets_away']['odd'], ' ')}</span></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

HTML;
                        }

                    }





                    $html_compet[] = <<<HTML


                    <div class="accordion-item" id="compet_det{$index}" data-competid="{$if(isset($compet['id_']), $compet['id_'], ' ')}">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion00{$index}">
                                <div class="icon-box mx-2">
                                    <img src="{$if(isset($compet['logo']), $compet['logo'], ' ')}" alt="logo" class="logo" style="width: 30px;height: 30px;">
                                </div>
                                <div class="in mx-2">
                                    {$if(isset($compet['nom']), $compet['nom'], ' ')} ~ {$if(isset($compet['country_name']), $compet['country_name'], ' ')}
                                </div>
                            </button>
                        </h2>
                        <div id="accordion00{$index}" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">

                                <div class="accordion-body" {$if(isset($compet['rencontres']), $bg_color, ' ')}>

                                    {$if(isset($compet['rencontres']), $rencontres, ' ')}

                                    {$if(!isset($compet['rencontres']), $rencontres1, ' ')}

                                </div>
                        </div>
                    </div>


HTML;
                }
            }

            return  json_encode([
                $get_compet['current_page'],
                $html_compet,
            ]);
        }


}
