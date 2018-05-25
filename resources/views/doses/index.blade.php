@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="d-flex justify-content-between">
        </b-row>
        <b-table striped hover stacked="md" :items="{{$doses}}"
                 :current-page="dosesPage" :per-page="perPage"
                 :fields="doseFields"
                 @row-clicked="doseClick">
        </b-table>
        <b-pagination align="right" :total-rows="{{$doses->count()}}" v-model="dosesPage" :per-page="perPage">
        </b-pagination>
    </b-container>
@endsection
