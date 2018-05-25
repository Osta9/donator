@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="flex-center">
            <b-row class="mb-4">
                <h1 class="mb-3 p-4 display-4 text-center col-12">Sustav za transfuziologiju</h1>
                <b-col cols="6" class="flex-center">
                    <h4 class="mt-4"> Status doza</h4>
                </b-col>

                <b-col cols="6" class="flex-center">
                    <b-img src="/../img/logo.png" fluid alt="Responsive image" width="100" height="100" />
                </b-col>
            </b-row>
        </b-row>
        @if(Auth::user()->isAdmin())
            <b-row id="kartice" class="flex-center text-center">
                @foreach($blood_types as $type)
                    <b-col cols="6" md="3" title="{{$type->doses_count}}" class="flex-center flex-column">
                        <img src="/../img/{{$type->img}}.png" class="img-fluid"/>
                        <h2>{{$type->doses_count}}</h2>
                    </b-col>
                @endforeach
            </b-row>
        @else

        @endif
    </b-container>
@endsection
