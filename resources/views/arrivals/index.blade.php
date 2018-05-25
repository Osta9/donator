@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="d-flex justify-content-between">
            <b-col cols="6" md="3" class="donor-form">
                <b-form-input v-model="filter" placeholder="Type to Search" />
            </b-col>
            <b-col cols="6" md="3">
                <a href="/arrivals/create">
                    <b-btn variant="donor" class="mb-2 w-100">
                        Novi dolazak
                    </b-btn>
                </a>
            </b-col>
        </b-row>

        <b-table striped hover stacked="md" :items="{{$arrivals}}"
                 :fields="arrivalFields" :current-page="arrivalsPage" :per-page="perPage"
                 @row-clicked="arrivalClick">
        </b-table>
        <b-pagination align="right" :total-rows="{{$arrivals->count()}}" v-model="arrivalsPage" :per-page="perPage">
        </b-pagination>
    </b-container>
@endsection
