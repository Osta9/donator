@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Uredi donatora</h1>
                <form method="POST" action="/arrivals/{{$arrival->id}}" class="donor-form">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <input id="date" type="date" placeholder="Datum dolaska"
                               value="{{$arrival->date->toDateString()}}"
                               class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}"
                               name="date" required autofocus>
                        @if ($errors->has('date'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="hemoglobin" type="text" placeholder="Hemoglobin"
                               value="{{$arrival->hemoglobin}}"
                               class="form-control{{ $errors->has('hemoglobin') ? ' is-invalid' : '' }}"
                               name="hemoglobin" required autofocus>
                        @if ($errors->has('hemoglobin'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('hemoglobin') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="blood_sys" type="text" placeholder="Sistolički tlak"
                               value="{{$arrival->blood_sys}}"
                               class="form-control{{ $errors->has('blood_sys') ? ' is-invalid' : '' }}"
                               name="blood_sys" required autofocus>
                        @if ($errors->has('blood_sys'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('blood_sys') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="blood_dia" type="text" placeholder="Distolički tlak"
                               value="{{$arrival->blood_dia}}"
                               class="form-control{{ $errors->has('blood_dia') ? ' is-invalid' : '' }}"
                               name="blood_dia" required autofocus>
                        @if ($errors->has('blood_dia'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('blood_dia') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- Treba mjenjat ovo u Checkbox -->
                    <div class="form-group">
                        <input id="accepted" type="text" placeholder="Prihvaćen"
                               value="{{$arrival->accepted}}"
                               class="form-control{{ $errors->has('accepted') ? ' is-invalid' : '' }}"
                               name="accepted" required autofocus>
                        @if ($errors->has('accepted'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('accepted') }}</strong>
                            </span>
                        @endif
                        
                    <!-- Trebal ovo ikako u editu nez -->
                    <div class="form-group">
                        <input id="reason" type="text" placeholder="Razlog"
                               value="{{$arrival->reason}}"
                               class="form-control{{ $errors->has('reason') ? ' is-invalid' : '' }}"
                               name="reason" required autofocus>
                        @if ($errors->has('reason'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('reason') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-donor w-100">
                            Spremi
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
