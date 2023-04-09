<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function PlanCheckout($plan_id){
        // $user=User::find($userId);
        $user=auth()->user();

        $plan=Plan::where('plan_id',$plan_id)->first();

        return view('subscription.checkout',[
            'plan'=>$plan,
            'intent'=>auth()->user()->createSetupIntent(),
            'user'=>$user

        ]);

    }
    public function PlanProcess(Request $request ,$id){

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

        $updateuser=User::find($id);

        $this->validate(request(),[
            'plan_name'=>'required',
            'billing_period'=>'required'
          ]);


        $updateuser->fill([
            'plan_name'=>$request->plan_name,
            'billing_period'=>$request->billing_period
        ])->save();
        return to_route('chat');
    }
}
