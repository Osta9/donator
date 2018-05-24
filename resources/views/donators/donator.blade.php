@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="flex-center flex-column">
            <b-col md="6" class="text-center my-2">
                <b>Ime</b><br/>
                {{$donator->first_name}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Prezime</b><br/>
                {{$donator->last_name}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Adresa</b><br/>
                {{$donator->address}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Telefon</b><br/>
                {{$donator->phone}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Datum rođenja</b><br/>
                {{$donator->birth_date->toDateString()}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Krvna grupa</b><br/>
                {{$donator->phone}}
            </b-col>
            <b-col class="my-4 text-center">
                <a href="{{ url('donators/' . $donator->id . '/edit')}}">
                    <b-btn variant="donor">
                        Uredi
                    </b-btn>
                </a>
                <b-btn variant="donor" @click="deleteModel('donators', {{$donator->id}})">
                    Izbriši
                </b-btn>
            </b-col>
        </b-row>
    </b-container>
@endsection
