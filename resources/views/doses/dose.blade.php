@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="flex-center flex-column">
            <b-col md="6" class="text-center my-2">
                <b>Ime</b><br/>
                {{$dose->donator->first_name}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Prezime</b><br/>
                {{$dose->donator->last_name}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Krvna grupa</b><br/>
                {{$dose->blood_type->type}}
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Status</b><br/>
                @if($dose->processed)
                    Obrađena
                @else
                    Neobrađena
                @endif
                <br/>
                @if($dose->donated)
                    Donirana
                @else
                    Nije donirana
                @endif
            </b-col>
            <b-col md="6" class="text-center my-2">
                <b>Datum donacije</b><br/>
                @if($dose->donation_date)
                    {{$dose->donation_date}}
                @else
                    -
                @endif
            </b-col>
            <b-col class="my-4 text-center">
                <b-btn variant="donor" @click="deleteModel('doses', {{$dose->id}})">
                    Izbriši
                </b-btn>
                <a href="/doses/{{$dose->id}}/process">
                    <b-btn variant="donor">
                        Obradi
                    </b-btn>
                </a>
                <a href="/doses/{{$dose->id}}/donate">
                    <b-btn variant="donor">
                        Donate
                    </b-btn>
                </a>
            </b-col>
        </b-row>
    </b-container>
@endsection
