@extends('layouts.app')

@section('content')
    <b-container>
        <b-table striped hover :items="{{$events}}"
        :fields="eventFields" :current-page="eventsPage" :per-page="perPage">
        </b-table>
        <b-pagination align="right" :total-rows="{{$events->count()}}" v-model="eventsPage" :per-page="perPage">
        </b-pagination>
    </b-container>
@endsection
