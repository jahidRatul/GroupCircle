<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeIndexController extends Controller
{
    public function homeIndex(){
        return view('frontEnd.home.HomeIndex');
    }public function signInOut(){
        return view('frontEnd.home.login');
    }
}
