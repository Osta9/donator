<?php

namespace App\Http\Controllers;

use App\Donator;
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
        //$top = Donator::all()->count()
        $events = Event::whereDate('date', '>', Carbon::now())->get();
        return view('welcome', compact('events'));
    }
}
