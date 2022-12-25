<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class auth_Controller extends Controller
{
    // public function getView(){
    //     return view("home");
    // }

    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(){
        $user = Socialite::driver('google')->user();
        $google_user = User::updateOrCreate([
            'google_id' => $user->id,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'google_id' => $user->id,
            'google_token' => $user->token,
        ]);
     
        Auth::login($google_user);
     
        return redirect('/home');
    }
}
