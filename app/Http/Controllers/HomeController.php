<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application welcome screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $events = Event::whereDate('date', '>', Carbon::now())->get();
        return view('welcome', compact('events'));
    }
}
