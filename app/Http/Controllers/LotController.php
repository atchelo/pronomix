<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotController extends Controller
{
    public function getAll(Request $request){
        $get_lot = session('list_lot');
            //dd($get_lot);
        $token = session('token');
        $islogged = session('current_user');
        return view('lot_list', compact('get_lot', 'token', 'islogged'));
    }

    public function storeAll(Request $request){

        $get_lot = session('list_lot');


        if (!isset($get_lot['current_page'])){

            session()->forget([
                'list_lot',
            ]);

            session([
                'list_lot' => $request->lot_data,
            ]);

            return route('all_lot');
        }
        else{

            $allLots = $request->lot_data['data'];

            $result = function ($arg)
            {
                if ($arg === true){
                    return <<<HTML

<span class="badge badge-danger" style="display: inline-block;
    padding: 3px 10px;
    min-width: 10px;
    border-radius: 0.25rem;
    text-align: center;
    font-size: 15px;
    font-weight: bold;
    line-height: 1;
    white-space: nowrap;
    vertical-align: baseline;
    color: #fff;
    background-color: #ff6a00;"><i class="fa fa-star"></i> Nouveau</span>

HTML;
                }else{
                    return '';
                }

            };

            $if = function ($condition, $true, $false) { return $condition ? $true : $false; };

            session([
                'list_lot' => $request->lot_data,
            ]);

            foreach ($allLots as $index => $lots){
               // return $lots['new'];
                $html_lot[] = <<<HTML

                <div class="row item" style="color: orange; padding: 10px 10px" id="item{$index}">
                            <div class="col-12">
                                {$if($lots['new'] === 'true', true, false)}

                                    {$result($if)}

                                <img src="{$lots['preview_img']}" alt="img" class="image-block imaged" style="width: -webkit-fill-available !important;">
                            </div>
                            <div class="col-12" style="margin-top: 15px">
                                <h2 style="font-weight: bold;">{$lots['titre']}</h2>
                                <h4>{$lots['nom']}</h4>
                                <h5 style="margin: 0">Stock disponible: <span>{$lots['restant']}</span></h5>
                            </div>
                            <div class="col-12">
                                <div class="rating" data-rate-value={$lots['popularity']}></div>
                            </div>
                            <div class="col-12">
                                <p>{$lots['description']}</p>
                            </div>
                            <div class="col-12">
                                <span style="display: inline-block;
    padding: 3px 5px;
    min-width: 10px;
    border-radius: 0.25rem;
    text-align: center;
    font-size: 15px;
    font-weight: bold;
    line-height: 1;
    white-space: nowrap;
    vertical-align: baseline;
    color: #fff;
    background-color: #ff6a00;">{$lots['valeur']}pts</span>
                            </div>
                            <div class="col-12 mt-1">
                                <button type="button" class="btn btn-primary btn-sm btn-block me-1 mb-1" style="border-radius: 0.37rem">OBTENIR</button>
                                <button type="button" class="btn btn-light btn-sm btn-block me-1 mb-1" style="border-radius: 0.37rem; border-color: #e4e4e4 !important;"> <ion-icon name="heart" style="font-size: 15px; color: #969696"></ion-icon> SUIVRE</button>
                            </div>
                        </div>

HTML;

            }

            $current_page = session('list_lot');

            //return $current_page;

            return  [
                $current_page['current_page'],
                $html_lot,
                $current_page['next_page_url']
            ];

            //return json_encode($html_lot);


           // $cur = $get_lot['current_page'];
            $get_lot = session('list_lot');

            $data_all = array_merge($get_lot['data'] , $request->lot_data['data']);

            session([
                'list_lot' => $request->lot_data,
            ]);

            $new = session('list_lot');

            $new['data'] = $data_all;

            session([
                'list_lot' => $new,
            ]);

            $tab = session('list_lot');

            $el = sizeof($tab['data']);

            $cur = $el - 10;


            return url('lot_list#'."item$cur");
        }
    }

    public function rollback(){
        session()->forget([
            'list_lot',
        ]);
    }

}
