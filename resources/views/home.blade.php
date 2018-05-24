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

            
    <b-card-group id="kartice" class="row flex-center text-center">
        <b-card title="50" class="col-6 col-md-3"
                img-src="/../img/ap.png"
                img-fluid="yes"
                img-alt="Img"
                img-top>
        </b-card>
        <b-card title="60" class="col-6 col-md-3"
                img-fluid="yes"
                img-src="/../img/bp.png"
                img-alt="Img"
                img-top>
        </b-card>
        <b-card title="42" class="col-6 col-md-3"
                img-fluid="yes"
                img-src="/../img/abp.png"
                img-alt="Img"
                img-top>
        </b-card>
        <b-card title="112" class="col-6 col-md-3"
                img-fluid="yes"
                img-src="/../img/op.png"
                img-alt="Img"
                img-top>
    </b-card-group>

        <b-card-group id="kartice" class="row flex-center text-center">
        <b-card title="50" class="col-6 col-md-3"
                img-src="/../img/an.png"
                img-fluid="yes"
                img-alt="Img"
                img-top>
        </b-card>
        <b-card title="60" class="col-6 col-md-3"
                img-fluid="yes"
                img-src="/../img/bn.png"
                img-alt="Img"
                img-top>
        </b-card>
        <b-card title="42" class="col-6 col-md-3"
                img-fluid="yes"
                img-src="/../img/abn.png"
                img-alt="Img"
                img-top>
        </b-card>
        <b-card title="112" class="col-6 col-md-3"
                img-fluid="yes"
                img-src="/../img/on.png"
                img-alt="Img"
                img-top>
    </b-card-group>
    </b-row>
    <b-row class="flex-center">
        <h4>Lista darivatelja</h4>
        
    </b-row>
</b-container>       
@endsection
