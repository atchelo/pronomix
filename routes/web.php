<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Match_listController;
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
        'token'
    ]);
    return redirect()->route('login');
})->name('logout');

Route::post('login', [LoginController::class, 'index']);

Route::get('register', function (){
    return view('authentication.register');
})->name('register');


Route::middleware(['authLog'])->group(function () {
    Route::get('/', function () {

        $islogged = session('current_user');
        $token = session('token');

        return view('home', compact('islogged', 'token'));
    })->name('home');
    Route::get('match_list', [Match_listController::class, 'getAll'])->name('allmatch');

    Route::post('store_match', [Match_listController::class, 'storeAll'])->name('store_match');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
