<?php

use App\Http\Controllers\CompetListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\Match_listController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', function (){
    return view('authentication.login');
})->name('login');

Route::get('logout', function (){
    session()->forget([
        'islogged',
        'current_user',
        'list_match',
        'details_match',
        'token'
    ]);
    return redirect()->route('login');
})->name('logout');

Route::post('login', [LoginController::class, 'index']);

Route::get('register', function (){
    return view('authentication.register');
})->name('register');

Route::post('register', [RegisterController::class, 'index']);


Route::middleware(['authLog'])->group(function () {
    Route::get('/', function () {

        $islogged = session('current_user');

        $token = session('token');

        return view('home', compact('islogged', 'token'));
    })->name('home');
    Route::get('match_list', [Match_listController::class, 'getAll'])->name('allmatch');

    Route::get('match_details', [Match_listController::class, 'getDetails'])->name('detmatch');
    Route::post('match_details', [Match_listController::class, 'storegetDetails']);

    Route::post('store_match', [Match_listController::class, 'storeAll'])->name('store_match');

    Route::get('compet_list', [CompetListController::class, 'getAll'])->name('allcompet');
    Route::post('compet_list', [CompetListController::class, 'storeAll'])->name('store_compet');

    Route::post('pronostiquer', [Match_listController::class, 'pronostiquer'])->name('pronos');
    Route::post('pronostiquer_multi', [Match_listController::class, 'pronostiquer_multi'])->name('pronos_multi');


    Route::post('sup_pronostique', [Match_listController::class, 'sup_coup_pron'])->name('sup_pronos');

    Route::post('vid_pronostique', [Match_listController::class, 'vid_coup_pron'])->name('vid_pronos');

    Route::get('lot_list', [LotController::class, 'getAll'])->name('all_lot');
    Route::post('lot_list', [LotController::class, 'storeAll'])->name('store_lots');
    Route::get('rollback_lot_list', [LotController::class, 'rollback'])->name('rollback');

    Route::get('coup_pron', [Match_listController::class, 'get_coup_pron'])->name('coup_pron');

    Route::post('code_coupon', [Match_listController::class, 'sais_code_coupon'])->name('code_coupon');

    Route::post('gen_code_coupon', [Match_listController::class, 'gen_code_coupon'])->name('gen_code_coupon');

});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
