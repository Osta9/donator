<?php

namespace App\Http\Controllers;

use App\Donator;
use Illuminate\Http\Request;

class DonatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donators = Donator::All();

        return view('donators.index', compact('donators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donators.create');
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'blood_type' => 'required|string|max:255',
            'birth_date' => 'required'
        ]);

        Donator::create(request([
            'first_name',
            'last_name',
            'address',
            'phone',
            'blood_type',
            'birth_date'
        ]));

        return redirect('/donators');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donator  $donator
     * @return \Illuminate\Http\Response
     */
    public function show(Donator $donator)
    {
        return view('donators.donator', compact('donator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donator  $donator
     * @return \Illuminate\Http\Response
     */
    public function edit(Donator $donator)
    {
        return view('donators.edit', compact('donator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donator  $donator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donator $donator)
    {
        // Validate request
        $this->validate(request(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'blood_type' => 'required|string|max:255',
            'birth_date' => 'required'
        ]);

        $donator->update(request([
            'first_name',
            'last_name',
            'address',
            'phone',
            'blood_type',
            'birth_date'
        ]));

        return redirect('/donators/' . $donator->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donator  $donator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donator $donator)
    {
        $donator->delete();
    }
}
