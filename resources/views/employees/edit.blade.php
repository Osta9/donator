@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Uredi donatora</h1>
                <form method="POST" action="/employees/{{$employee->id}}" class="donor-form">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <input id="first_name" type="text" placeholder="Ime"
                               value="{{$donator->first_name}}"
                               class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                               name="first_name" value="{{ old('first_name') }}" required autofocus>
                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="last_name" type="text" placeholder="Prezime"
                               value="{{$donator->last_name}}"
                               class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                               name="last_name" required autofocus>
                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="title" type="text" placeholder="Titula"
                               value="{{$arrival->title}}"
                               class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                               name="title" required autofocus>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('title') }}</strong>
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
