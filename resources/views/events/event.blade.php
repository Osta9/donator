@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="flex-center flex-column">
            <b-col md="6" class="text-center my-2">
                <b>Grad</b><br/>
                {{$event->city}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Adresa</b><br/>
                {{$event->address}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Info</b><br/>
                {{$event->info}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Datum</b><br/>
                {{$event->date->toDateString()}}
            </b-col>
            <b-col class="my-4 text-center">
                <a href="{{ url('events/' . $event->id . '/edit')}}">
                    <b-btn variant="donor">
                        Uredi
                    </b-btn>
                </a>
                <b-btn variant="donor" @click="deleteModel('events', {{$event->id}})">
                    Izbriši
                </b-btn>
            </b-col>
        </b-row>
    </b-container>
@endsection
