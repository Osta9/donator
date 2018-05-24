<?php

namespace App\Http\Controllers;

use App\Arrival;
use Illuminate\Http\Request;

class ArrivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrivals = Arrival::All();

        return view('arrivals.index', compact('arrivals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('arrivals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate request
        $this->validate(request(), [
            'date' => 'required',
            'donator_id' => 'required',
            'doctor_id' => 'required',
            'assistant_id' => 'required',
            'hemoglobin' => 'required',
            'blood_sys' => 'required',
            'blood_dia' => 'required',
            'accepted' => 'required',
            'reason' => 'required'
        ]);

        Arrival::create(request([
            'date',
            'donator_id',
            'doctor_id',
            'assistant_id',
            'hemoglobin',
            'blood_sys',
            'blood_dia',
            'accepted',
            'reason'
        ]));

        return redirect('/arrivals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Arrival  $arrival
     * @return \Illuminate\Http\Response
     */
    public function show(Arrival $arrival)
    {
        return view('arrivals.arrival', compact('arrival'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Arrival  $arrival
     * @return \Illuminate\Http\Response
     */
    public function edit(Arrival $arrival)
    {
        return view('arrivals.edit', compact('arrival'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Arrival  $arrival
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arrival $arrival)
    {
        // Validate request
        $this->validate(request(), [
            'date' => 'required',
            'donator_id' => 'required',
            'doctor_id' => 'required',
            'assistant_id' => 'required',
            'hemoglobin' => 'required',
            'blood_sys' => 'required',
            'blood_dia' => 'required',
            'accepted' => 'required',
            'reason' => 'required',
        ]);

        $arrival->update(request([
            'date',
            'donator_id',
            'doctor_id',
            'assistant_id',
            'hemoglobin',
            'blood_sys',
            'blood_dia',
            'accepted',
            'reason'
        ]));

        return redirect('/arrivals/' . $arrival->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Arrival  $arrival
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arrival $arrival)
    {
        $arrival->delete();
    }
}
