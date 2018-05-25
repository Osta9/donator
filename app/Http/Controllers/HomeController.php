<?php

namespace App\Http\Controllers;

use App\BloodType;
use App\Donator;
use Illuminate\Http\Request;
use App\Event;
use App\Dose;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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

        $blood_types = BloodType::withCount('doses')->get();
        return view('home', compact(['blood_types']));
    }

    /**
     * Show the application welcome screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $top = Donator::withCount('doses')->orderBy('doses_count', 'desc')->take(5)->get();
        $events = Event::whereDate('date', '>', Carbon::now())->get();
        return view('welcome', compact(['events', 'top']));
    }
}
