@extends('layouts.app')

@section('content')
    <b-container>
        <a href="/donators/create">
            <b-btn variant="donor" class="mb-2 align float-right">
                Novi donator
            </b-btn>
        </a>
        <b-table striped hover :items="{{$donators}}"
                 :fields="donatorFields" :current-page="donatorsPage" :per-page="perPage"
                 @row-clicked="donatorClick">
        </b-table>
        <b-pagination align="right" :total-rows="{{$donators->count()}}" v-model="donatorsPage" :per-page="perPage">
        </b-pagination>
    </b-container>
@endsection
