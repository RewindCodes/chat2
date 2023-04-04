<?php
declare(strict_types=1);

namespace App\Http\Controllers\pages;
use App\Http\Controllers\Controller;




use Illuminate\Contracts\Foundation\Application as ApplicationContract;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use OpenAI\Laravel\Facades\OpenAI;

class ChatController extends Controller
{

    public function showchat()
    {

        return view('pages/chat');
    }

   

}

