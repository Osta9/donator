@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="d-flex justify-content-end">
            <b-col cols="12" md="3">
                <a href="/events/create">
                    <b-btn variant="donor" class="mb-2 w-100">
                        Novi događaj
                    </b-btn>
                </a>
            </b-col>
        </b-row>
        <b-table striped hover :items="{{$events}}"
                 :fields="eventFields" :current-page="eventsPage" :per-page="perPage"
                 @row-clicked="eventClick">

        </b-table>
        <b-pagination align="right" :total-rows="{{$events->count()}}" v-model="eventsPage" :per-page="perPage">
        </b-pagination>
    </b-container>
@endsection
