<?php

namespace App\Http\Controllers;

use App\Arrival;
use App\Dose;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoseController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('admin');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doses = Dose::with('arrival', 'blood_type')->get();

        return view('doses.index', compact('doses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $dose = Dose::create([
            'arrival_id' => $id,
            'blood_type_id' => Arrival::find($id)->donator->blood_type_id
        ]);

        return redirect('/doses/' . $dose->id);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/doses/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dose  $dose
     * @return \Illuminate\Http\Response
     */
    public function show(Dose $dose)
    {
        return view('doses.dose', compact('dose'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dose  $dose
     * @return \Illuminate\Http\Response
     */
    public function edit(Dose $dose)
    {
        return view('events.dose', compact('dose'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dose  $dose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dose $dose)
    {

            $dose->update(request([
                'processed',
                'donated'
            ]));

        return redirect('/doses/' . $dose->id);
    }


    public function process($id)
    {
        $dose = Dose::find($id);

        if($dose) {
            $dose->processed =  1;
            $dose->save();
        }

        return redirect('/doses/' . $dose->id);
    }

    public function donate($id)
    {
        $dose = Dose::find($id);

        if($dose) {
            $dose->donated =  1;
            $dose->donation_date = Carbon::now();
            $dose->save();
        }

        return redirect('/doses/' . $dose->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dose  $dose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dose $dose)
    {
        $dose->delete();
    }
}
