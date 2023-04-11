<?php
declare(strict_types=1);

namespace App\Http\Controllers\pages;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use OpenAI\Laravel\Facades\OpenAI;
use Laravel\Cashier\Subscription;


class ChatController extends Controller
{

    public function showchat()
    {
        // $plan=Subscription::with('userplan')->where('user_id',auth()->id())->get();
        // $userplan=$plan->::all();





        $messages = collect(session('messages', []))->reject(fn ($message) => $message['role'] === 'system');

        return view('pages/chat',[
            'messages' => $messages
        ]);
    }

    public function chatting(Request $request)
    {
        // $subscription=Subscription::where('user_id',auth()->id())->get();


        $user=Auth::user()->plan_name;

        if($user=='Basic'){

        }else if($user=='Advanced'){

        }

        $messages = $request->session()->get('messages', [
            ['role' => 'system', 'content' => 'You are Chat2 - A ChatGPT clone. Answer as concisely as possible.']
        ]);

        $messages[] = ['role' => 'user', 'content' => $request->input('message')];
        $response = OpenAI::chat()->create([
              
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages
        ]);
        $messages[] = ['role' => 'assistant', 'content' => $response->choices[0]->message->content];

        $request->session()->put('messages', $messages);

        return redirect('/chat');
    }


    public function destroy(Request $request): Application|Redirector|RedirectResponse|ApplicationContract
    {
        $request->session()->forget('messages');

        return redirect('/chat');
    }



}

