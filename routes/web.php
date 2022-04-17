<?php

use App\Http\Controllers\LoginController;
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
        'current_user'
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
        //dd($islogged);
        return view('home', compact('islogged'));
    })->name('home');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
