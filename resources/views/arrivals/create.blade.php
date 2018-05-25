@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Novi dolazak</h1>
                <form method="POST" action="/arrivals" class="donor-form">
                    @csrf
                    <div class="form-group">
                        <input id="date" type="date" placeholder="Datum dolaska"
                               class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}"
                               name="date" value="{{ old('date') }}" required autofocus>
                        @if ($errors->has('date'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="hemoglobin" type="text" placeholder="Hemoglobin"
                               class="form-control{{ $errors->has('hemoglobin') ? ' is-invalid' : '' }}"
                               name="hemoglobin" value="{{ old('hemoglobin') }}" required autofocus>
                        @if ($errors->has('hemoglobin'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('hemoglobin') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <input id="blood_sys" type="textarea" placeholder="Sistolički tlak"
                               class="form-control{{ $errors->has('blood_sys') ? ' is-invalid' : '' }}"
                               name="blood_sys" value="{{ old('blood_sys') }}" required autofocus>
                        @if ($errors->has('blood_sys'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('blood_sys') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="blood_dia" type="text" placeholder="Dijastolički tlak"
                               class="form-control{{ $errors->has('blood_dia') ? ' is-invalid' : '' }}"
                               name="blood_dia" value="{{ old('blood_dia') }}" required autofocus>
                        @if ($errors->has('blood_dia'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('blood_dia') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!--OVDJE TREBA CHECKBOX ZA PRIHVACEN ILI NE -->
                    <div class="form-group">
                        <input id="accepted" type="date" placeholder="Prihvaćen"
                               class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}"
                               name="accepted" value="{{ old('accepted') }}" required autofocus>
                        @if ($errors->has('accepted'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('accepted') }}</strong>
                            </span>
                        @endif
                    </div>
                    
<!--                     Ovo polje je nullable pa mozda da se hide-a ako je checkbox strihiran a valjalo bi i da je textarea al molim te nemoj komplicirat s ovim nego ostavi da se smije poslat prazno i gotovo
-->                    <div class="form-group">
                        <input id="reason" type="textarea" placeholder="Razlog"
                               class="form-control{{ $errors->has('reason') ? ' is-invalid' : '' }}"
                               name="reason" value="{{ old('reason') }}" required autofocus>
                        @if ($errors->has('reason'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('reason') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-donor w-100">
                            Dodaj dolazak
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
