@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="flex-center flex-column">
            <b-col md="6" class="text-center my-2">
                <b>Datum dolaska</b><br/>
                 {{$arrival->date->toDateString()}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Hemoglobin</b><br/>
                {{$arrival->hemoglobin}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Sistolički tlak</b><br/>
                {{$arrival->blood_sys}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Distolički tlak</b><br/>
                {{$arrival->blood_dia}}
            </b-col>
            <!-- Nasteli i ovo -->
            <b-col md="6" class="text-center my-2">
                <b>Prihvaćen</b><br/>
                {{$arrival->accepted}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Razlog</b><br/>
                {{$arrival->reason}}
            </b-col>
            <b-col class="my-4 text-center">
                <a href="{{ url('arrivals/' . $arrival->id . '/edit')}}">
                    <b-btn variant="donor">
                        Uredi
                    </b-btn>
                </a>
                <b-btn variant="donor" @click="deleteModel('arrivals', {{$arrival->id}})">
                    Izbriši
                </b-btn>
            </b-col>
        </b-row>
    </b-container>
@endsection
