<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetListController extends Controller
{
    public function getAll(Request $request){

        $get_compet = session('list_compet');
        $token = session('token');
        return view('compet_list', compact('get_compet', 'token'));
    }

    public function storeAll(Request $request){
        session()->forget([
            'list_compet',
        ]);

        session([
            'list_compet' => $request['compet_data'],
        ]);

        return route('allcompet');
    }
}
