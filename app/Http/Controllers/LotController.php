<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotController extends Controller
{
    public function getAll(Request $request){
        $get_lot = session('list_lot');
            //dd($get_lot);
        $token = session('token');
        return view('lot_list', compact('get_lot', 'token'));
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

            //dd($request->lot_data['data']);
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
