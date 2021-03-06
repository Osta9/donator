@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Novi događaj</h1>
                <form method="POST" action="/events" class="donor-form">
                    @csrf
                    <div class="form-group">
                        <input id="city" type="text" placeholder="Grad"
                               class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                               name="city" value="{{ old('city') }}" required autofocus>
                        @if ($errors->has('city'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="address" type="text" placeholder="Adresa"
                               class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                               name="address" value="{{ old('address') }}" required autofocus>
                        @if ($errors->has('address'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <textarea id="info" type="text" placeholder="Vise informacija"
                               class="form-control{{ $errors->has('info') ? ' is-invalid' : '' }}"
                                  name="info" value="{{ old('info') }}" required autofocus></textarea>
                        @if ($errors->has('info'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('info') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="date" type="date" placeholder="Datum"
                               class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}"
                               name="date" value="{{ old('date') }}" required autofocus>
                        @if ($errors->has('date'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-donor w-100">
                            Dodaj događaj
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
