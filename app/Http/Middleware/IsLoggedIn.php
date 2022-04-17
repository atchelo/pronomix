<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //session()->forget('firstTime');
        $firstTime = session('firstTime');

        //dd($firstTime);

        /*if ($firstTime === null){
            dd('first');
        }else{
            dd('not first');
        }*/

        if ($firstTime === 1){
            //traitement en ammont
            $islogged = 0;

            if ($islogged === 0){
                return redirect('login');
            }
            return $next($request);
        }
        if ($firstTime === null){
            //dd('welcome');
            session(['firstTime' => 1]);
            return redirect('welcome');
        }

        dd('error');
    }
}
