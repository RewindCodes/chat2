<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    //GOOGLE
    public function showGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function google()
    {
        $user = Socialite::driver('google')->user();
        $userEmail = $user->getEmail();
    $userName = strtolower(implode('_',explode(' ',$user->getName())));

    $getUser = \App\Models\User::where('email',$userEmail)->first();

    if($getUser){
        Auth::login($getUser);
        return redirect('chat');
    } else{
        $user = \App\Models\User::create([
            'name' => $userName,
            'email' => $userEmail,
            'password' => bcrypt('111111'),
        ]);
        Auth::login($user);
        return redirect('chat');
    }
    }
    //LINKEDIN
    public function showLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }
    public function linkedin()
    {
        $user = Socialite::driver('linkedin')->user();
        $userEmail = $user->getEmail();
    $userName = strtolower(implode('_',explode(' ',$user->getName())));

    $getUser = \App\Models\User::where('email',$userEmail)->first();

    if($getUser){
        Auth::login($getUser);
        return redirect('chat');
    } else{
        $user = \App\Models\User::create([
            'name' => $userName,
            'email' => $userEmail,
            'password' => bcrypt('111111'),
        ]);
        Auth::login($user);
        return redirect('chat');
    }
    }
    // GITHUB
    public function showGithub()
    {
        return Socialite::driver('github')->redirect();
    }
    public function github()
    {
    $user = Socialite::driver('github')->user();
    $userEmail = $user->getEmail();
    dd($user);
    $userName = strtolower(implode('_',explode(' ',$user->getName())));

    $getUser = \App\Models\User::where('email',$userEmail)->first();

    if($getUser){
        Auth::login($getUser);
        return redirect('chat');
    } else{
        $user = \App\Models\User::create([
            'name' => $userName,
            'email' => $userEmail,
            'password' => bcrypt('111111'),
        ]);
        Auth::login($user);
        return redirect('chat');
    }
    }


}
