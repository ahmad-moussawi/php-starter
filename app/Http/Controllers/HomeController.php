<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $welcomeMessage = 'Hello Guys';

    function index() {

        return view('welcome', ['welcome' => $this->welcomeMessage ]);

    }
}
