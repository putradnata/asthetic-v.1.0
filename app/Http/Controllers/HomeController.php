<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\univSchedule;

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
        $univSchedule = univSchedule::all();

        return view('home',['univSchedule'=>$univSchedule]);
    }
}
