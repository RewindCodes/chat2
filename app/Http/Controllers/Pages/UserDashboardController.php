<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Cashier\Subscription;

class UserDashboardController extends Controller
{
    public function UserDashboard(){
        $subscription=Subscription::where('user_id',auth()->id())->get();

        return view('pages.userdashboard',compact('subscription'));
    }

    public function subcriptionCancel(Request $request){
        $subscriptionName=$request->subscriptionName;
        if($subscriptionName){
            $user=auth()->user();
            $user->subscription($subscriptionName)->cancel();
            return to_route('user.dashboard');

        }
    }

    public function subcriptionResume(Request $request){
        $subscriptionName=$request->subscriptionName;
        if($subscriptionName){
            $user=auth()->user();
            $user->subscription($subscriptionName)->resume();
            return to_route('user.dashboard');
    }
}
}
