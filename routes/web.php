<?php

use App\Http\Controllers\CompetListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\Match_listController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PersInfoController;
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

        //dd($islogged);

        session()->forget([
            'list_lot',
            'list_compet'
        ]);

        $token = session('token');

        return view('home', compact('islogged', 'token'));
    })->name('home');
    Route::get('match_list', [Match_listController::class, 'getAll'])->name('allmatch');

    Route::get('match_details', [Match_listController::class, 'getDetails'])->name('detmatch');
    Route::post('match_details', [Match_listController::class, 'storegetDetails']);

    Route::post('store_match', [Match_listController::class, 'storeAll'])->name('store_match');

    Route::get('compet_list', [CompetListController::class, 'getAll'])->name('allcompet');
    Route::post('compet_list/store', [CompetListController::class, 'storeAll'])->name('store_compet');

    Route::post('pronostiquer', [Match_listController::class, 'pronostiquer'])->name('pronos');
    Route::post('pronostiquer_multi', [Match_listController::class, 'pronostiquer_multi'])->name('pronos_multi');


    Route::post('sup_pronostique', [Match_listController::class, 'sup_coup_pron'])->name('sup_pronos');

    Route::post('vid_pronostique', [Match_listController::class, 'vid_couppassword_pron'])->name('vid_pronos');

    Route::get('lot_list', [LotController::class, 'getAll'])->name('all_lot');
    Route::post('lot_list', [LotController::class, 'storeAll'])->name('store_lots');
    Route::post('obtenir_lot', [LotController::class, 'obtenir_lot'])->name('obtenir_lot');

    Route::post('rejeter_lot', [PersInfoController::class, 'rejeter_lot'])->name('rejeter_lot');

    Route::post('obtenir_lot_success', [LotController::class, 'obtenir_lot_success'])->name('obtenir_lot_success');

    Route::post('rejeter_lot_success', [PersInfoController::class, 'rejeter_lot_success'])->name('rejeter_lot_success');

    Route::get('rollback_lot_list', [LotController::class, 'rollback'])->name('rollback');

    Route::get('coup_pron', [Match_listController::class, 'get_coup_pron'])->name('coup_pron');

    Route::post('code_coupon', [Match_listController::class, 'sais_code_coupon'])->name('code_coupon');

    Route::post('gen_code_coupon', [Match_listController::class, 'gen_code_coupon'])->name('gen_code_coupon');

    Route::post('enr_code_coupon', [Match_listController::class, 'enr_sais_code_coupon'])->name('enr_code_coupon');

    Route::get('historique', [Match_listController::class, 'historique_coupon'])->name('his_coup');

    Route::post('store_hist', [Match_listController::class, 'historique_store'])->name('store_hist');

    Route::get('resultats', [Match_listController::class, 'get_resultats'])->name('result');

    Route::get('pers_info', [PersInfoController::class, 'infos'])->name('pers_info');

    Route::get('password_modif', [PersInfoController::class, 'pwd_modif'])->name('pwd_modif');
    Route::post('password_modif', [PersInfoController::class, 'pwd_store']);

    Route::get('suivi_coli', [PersInfoController::class, 'suivi_coli'])->name('suivi_coli');

    Route::get('payment', [PaymentController::class, 'payment_index'])->name('payment_index');


    Route::post('payment_token_store', [PaymentController::class, 'payment_token_store'])->name('payment_token_store');

});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
