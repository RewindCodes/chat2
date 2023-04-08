<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function PlanCheckout($plan_id){
        // $user=auth()->user();
        // if(!$user){
        //     return redirect()->back()->with('message', 'login in first');
        // }
        $plan=Plan::where('plan_id',$plan_id)->first();

        return view('subscription.checkout',[
            'plan'=>$plan,
            'intent'=>auth()->user()->createSetupIntent(),
        ]);

    }
    public function PlanProcess(Request $request){
        $user=auth()->user();
        $user->createOrGetStripeCustomer();
        $paymentMethod=null;
        $paymentMethod=$request->payment_method;
        if($paymentMethod !=null){
            $paymentMethod=$user->addPaymentMethod($paymentMethod);
        }
        $plan=$request->plan_id;
        $user->newSubscription(
            'default',  $plan
        )->create($paymentMethod !=null ?$paymentMethod->id :'');
        return to_route('chat');
    }
}
