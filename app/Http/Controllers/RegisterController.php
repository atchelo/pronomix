<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index(Request $request){

        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
            "required_if:term, !=, on",
        ]);

        if ($request->country === 'CI'){
            $country = 1;
        }

        $response = Http::post('https://demo.pronomix.net/api/register', [
            'nom' => $request->name,
            'prenom' => $request->surname,
            'email' => $request->email,
            'password' => $request->password,
            'confirm_password' => $request->password_confirmation,
            'pays_id' => $country
        ]);

        $rep = json_decode($response->body(), true);


        if (isset($rep['error'])){
            if ($rep['error'] === true){
                return redirect()->back()->with([
                    'error' => $rep['message']
                ]);
            }
        }elseif(isset($rep['success'])){

            if ($rep['success'] === true){
                session([
                    'islogged' => 1,
                    'current_user' => $rep['data'],
                    'token' => $rep['new_token'],
                ]);
                return redirect()->route('home');
            }
        }

    }
}
