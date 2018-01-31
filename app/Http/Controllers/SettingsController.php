<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    function index() {

        // you can find the view under /resources/views/settings/index.blade.php
        return view('settings.index', [
            'title' => 'Settings'
        ]);

    }
}
