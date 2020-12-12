<?php

namespace App\Http\Controllers\digilearn\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function home()
    {
        return 'Digilearn Home Page';
    }

    public function support()
    {
        //return view('digilearn.pages.app.support');
        return 'Digilearn Support';
    }
}
