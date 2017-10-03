<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$userObject=User::where('id',$id)->first();
        return view('frontEnd.update.loginUpdate',['userInfoById'=>$userObject]);*/
        /*
         *  echo '<pre>';
         print_r();
         exit();
        */
        $statusData = DB::table('users')
            ->join('statas_posts', 'users.id', '=', 'statas_posts.user_id')
            ->select('statas_posts.*', 'users.name', 'users.email')
            /*->where('id',$id)
                ->first()*/
            ->orderBy('id', 'desc')
            ->get();

        /* echo '<pre>';
         print_r($statusData);
         exit();*/
        return view('home', ['statusDataAlls' => $statusData]);
    }
}
