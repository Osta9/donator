@extends('layouts.app')

@section('content')
    <b-container>
        <a href="/events/create">
            <b-btn variant="donor" class="mb-2 align float-right">
                Novi dogadjaj
            </b-btn>
        </a>
        <b-table striped hover :items="{{$events}}"
                 :fields="eventFields" :current-page="eventsPage" :per-page="perPage"
                 @row-clicked="eventClick">

        </b-table>
        <b-pagination align="right" :total-rows="{{$events->count()}}" v-model="eventsPage" :per-page="perPage">
        </b-pagination>
    </b-container>
@endsection
