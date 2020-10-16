<?php

namespace App\Http\Controllers\Client;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function home(Request $request)
    {
        //$value = $request->cookie('subscription');
        //dd(request()->cookie() );
        return view('client.pages.home');
    }

    public function blogs()
    {
  
        return view('client.pages.blogs');
    }

    public function about()
    {
  
        return view('client.pages.about');
    }

    public function contact()
    {
  
        return view('client.pages.contact');
    }

    public function subscribe(Request $request)
    {
        $subscription = New Subscription;
        $subscription->email = $request->email;
        $subscription->save();

        //$response = new Response('Hello world');
        //$response->withCookie(cookie('subscription','subscription',10));

        


        return redirect() ->route('app.home')->withCookie(cookie('subscription','subscription',10));
    }


}
