<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {

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


}
