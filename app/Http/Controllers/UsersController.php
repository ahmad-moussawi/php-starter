<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index() {

        // you can find the view under /resources/views/users/index.blade.php
        return view('users.index', [
            'title' => 'users'
        ]);

    }
}
