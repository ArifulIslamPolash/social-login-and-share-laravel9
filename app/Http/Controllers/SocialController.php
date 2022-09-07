<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;
use Share;

use Illuminate\Http\Request;

class SocialController extends Controller
{

    // for Facebook social login
    public function facebookRedirect(){
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook(){
        $user = Socialite::driver('facebook')->stateless()->user();

        $findUser = User::where('facebook_id', $user->id)->first();

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
    // for google social login
    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }
    public function loginWithGoogle(){
        $user = Socialite::driver('google')->stateless()->user();

        $findUser = User::where('google_id', $user->id)->first();

        if($findUser){
            Auth::login($findUser);
            return redirect('/home');
        }else{
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->google_id = $user->id;
            $new_user->password = bcrypt('123456');
            $new_user->save();

            Auth::login($new_user);
            return redirect('/home');
        }
    }
    // for github social login
    public function githubRedirect(){
        return Socialite::driver('github')->redirect();
    }
    public function loginWithGithub(){
        $user = Socialite::driver('github')->stateless()->user();

        $findUser = User::where('github_id', $user->id)->first();

        if($findUser){
            Auth::login($findUser);
            return redirect('/home');
        }else{
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->github_id = $user->id;
            $new_user->password = bcrypt('123456');
            $new_user->save();

            Auth::login($new_user);
            return redirect('/home');
        }
    }





    public function index(){
       $socialShare = Share::page('https://www.prothomalo.com/bangladesh/qix05whu4g','এলপিজির দাম বাড়ল, ১২ কেজির সিলিন্ডার এখন ১২৩৫')
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()->getRawlinks();
        // dd($socialShare);
        return view('social-share', compact('socialShare'));

    }
}
