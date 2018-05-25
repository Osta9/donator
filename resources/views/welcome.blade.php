@extends('layouts.app')

@section('content')
    <b-container fluid id="naslovna">
        <b-container>
            <b-row class="flex-center">
                <h1 class="mb-3 p-4 display-4 text-center">Sustav za transfuziologiju</h1>
                <b-row class="">
                    <b-col cols="12" sm="7" class="flex-center">
                        <div>
                            <b-img src="/../img/blooddonation.jpg" fluid alt="Responsive image" />
                        </div>
                    </b-col>

                    <b-col cols="12" sm="5" class="flex-center my-4 my-md-0">
                        <div>
                            <b-img src="/../img/chart.png" fluid alt="Responsive image" />
                        </div>
                    </b-col>
                    <b-col cols="12">
                        <p class="text-center mt-5 p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eius ad ullam harum corporis. Optio perspiciatis facere veniam eius, distinctio laboriosam magni at aliquid aperiam architecto molestias, debitis culpa! Porro, incidunt eligendi expedita eum mollitia officia similique totam itaque, aperiam nam modi sint tempore esse deserunt. Quae dicta, atque voluptates.</p>
                        <hr class="hr-red">
                    </b-col>
                </b-row>
                <b-row class="col-12 mt-4 flex-center">
                    <h4 class="col-12 text-center my-4"> Nadolazeće akcije darivanja krvi</h4>
                    @foreach($events as $event)
                        <b-col cols="12" md="4">
                            <b-card
                                header="{{$event->city}}"
                                class="text-center event-card my-md-2">
                                <p class="card-text">
                                    {{$event->info}}<br/>
                                    {{$event->address}}<br/>
                                    {{$event->date->diffForHumans()}}
                                </p>
                            </b-card>
                        </b-col>
                    @endforeach
                    <h3 class="my-5 col-12 text-center">TOP DONATORI</h3>
                    <b-list-group class="col-12">
                        @foreach($top as $t)
                            <b-list-group-item class="d-flex justify-content-between align-items-center">
                                {{$t->first_name . ' ' . $t->last_name}}
                                <b-badge variant="danger" pill>{{$t->doses_count}}</b-badge>
                            </b-list-group-item>
                        @endforeach
                    </b-list-group>
                </b-row>
            </b-row>
        </b-container>
    </b-container>
@endsection
