<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\View;
use Illuminate\Validation\Rules\Password;


class UserAuthController extends Controller
{
    // ====================================view registration===========================
    public function viewregister(){
        return View ('auth/register');
    }

    // ============================registration===============================
    public function register(){
        $this->validate(request(),[

            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password' => ['required',  password::min(8)->letters()->numbers()->symbols()]
       ]);
       $user=User::create([
          'name'=>request('name'),
          'email'=>request('email'),
          'password'=>bcrypt(request('password'))
       ]);

       return to_route('showlogin');
    }


    // ===================view login====================
    public function viewlogin(){
        return View ('auth/login');
    }

    // ========================login=====================
    public function login(){
        $this->validate(request(),[
            'email'=>'required',
            'password'=>'required'
        ]);


       if( Auth::attempt([
        'email'=>request('email'),
        'password'=>request('password')
         ])){
            return to_route('home');
         }else{
            return redirect()->back()->with('error', 'not matched');
         }


    }

    // ==============logout=================
    public function logout(){
        Auth::guard('web')->logout();
        return to_route('showlogin');
    }

}
