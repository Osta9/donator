@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="flex-center flex-column">
            <b-col md="6" class="text-center my-2">
                <b>Ime</b><br/>
                {{$employee->first_name}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Prezime</b><br/>
                {{$employee->last_name}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Titula</b><br/>
                {{$employee->title}}
            </b-col>
            <b-col class="my-4 text-center">
                <a href="{{ url('employees/' . $employee->id . '/edit')}}">
                    <b-btn variant="donor">
                        Uredi
                    </b-btn>
                </a>
                <b-btn variant="donor" @click="deleteModel('employees', {{$employee->id}})">
                    Izbriši
                </b-btn>
            </b-col>
        </b-row>
    </b-container>
@endsection
