@extends('layouts.app')

@section('content')
<b-container>
    <b-row class="flex-center">
        <h1 class="mb-5 display-4 text-center">Sustav za transfuziologiju</h1>
        <b-row>
            <b-col cols="12" sm="7" class="d-flex justify-content-center px-3">
                <b-img src="/../img/blooddonation.jpg" fluid alt="Responsive image" />
            </b-col>

            <b-col cols="12" sm="5" class="d-flex justify-content-center justify-content-md-end">
                <b-img src="/../img/chart.png" fluid alt="Responsive image" />
            </b-col>
            <b-col cols="12">
                  <p class="text-center mt-5 p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eius ad ullam harum corporis. Optio perspiciatis facere veniam eius, distinctio laboriosam magni at aliquid aperiam architecto molestias, debitis culpa! Porro, incidunt eligendi expedita eum mollitia officia similique totam itaque, aperiam nam modi sint tempore esse deserunt. Quae dicta, atque voluptates.</p>
                   <hr class="hr-danger">
            </b-col>
        </b-row>
        <b-row id="naslovna" class="col-12 mt-4 flex-center">
            <h4 class="col-12 text-center my-4"> Nadolazeće akcije darivanja krvi</h4>  
            <b-col cols="4">
            <b-card
                text-variant="red"
                header="Raštani"
                class="text-center">
            <p class="card-text">25.25.2010</p>
            </b-card>
            </b-col>
            
            <b-col cols="4">
            <b-card
                text-variant="red"
                header="Raštani"
                class="text-center">
            <p class="card-text">25.25.2010</p>
            </b-card>
            </b-col>

            <b-col cols="4">
            <b-card
                text-variant="red"
                header="Raštani"
                class="text-center">
            <p class="card-text">25.25.2010</p>
            </b-card>
            </b-col>
            <h3 class="my-5 col-12 text-center">TOP DONATORI</h3>
            <b-list-group class="col-12">
              <b-list-group-item class="d-flex justify-content-between align-items-center">
                Ivan Ostojić
                <b-badge variant="danger" pill>141</b-badge>
              </b-list-group-item>
              <b-list-group-item class="d-flex justify-content-between align-items-center">
                Mario Rajič
                <b-badge variant="danger" pill>2</b-badge>
              </b-list-group-item>
              <b-list-group-item class="d-flex justify-content-between align-items-center">
                Robert Rozić
                <b-badge variant="danger" pill>1</b-badge>
              </b-list-group-item>
            </b-list-group>
            <b-row class="flex-center col-12">
                <b-col cols="8">
                    <hr class="hr-red mt-5">
                </b-col>
                <b-col cols=5>
                <footer class="my-4 py-3 text-center">Sustav za transfuziologiju @ 2018.</footer>
                </b-col>
            </b-row>
        </b-row>

    </b-row>
</b-container>
@endsection
