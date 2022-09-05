<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function facebookRedirect(){
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook(){
        $user = Socialite::driver('facebook')->stateless()->user();

        $findUser = User::where('facebook_id', $user->id)->first();
        dd($findUser);
        if($findUser){
            Auth::login($findUser);
            return redirect('/home');
        }else{
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->facebook_id = $user->id;
            $new_user->password = bcrypt('123456');
            $new_user->save();

            Auth::login($new_user);
            return redirect('/home');
        }
    }
}