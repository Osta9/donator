@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Uredi događaj</h1>
                <form method="POST" action="/events/{{$event->id}}" class="donor-form">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <input id="city" type="text" placeholder="Grad"
                               value="{{$event->city}}"
                               class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                               name="city" required autofocus>
                        @if ($errors->has('city'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="address" type="text" placeholder="Adresa"
                               value="{{$event->address}}"
                               class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                               name="address" required autofocus>
                        @if ($errors->has('address'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <textarea id="info" type="text" placeholder="Vise informacija"
                                  class="form-control{{ $errors->has('info') ? ' is-invalid' : '' }}"
                                  name="info"  required autofocus>{{$event->info}}</textarea>
                        @if ($errors->has('info'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('info') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="date" type="date" placeholder="Datum"
                               value="{{$event->date->toDateString()}}"
                               class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}"
                               name="date" required autofocus>
                        @if ($errors->has('date'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-donor w-100">
                            Spremi događaj
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
