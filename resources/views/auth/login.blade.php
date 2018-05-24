@extends('layouts.app')

@section('content')
    <b-container class="auth-form">
        <b-row class="row flex-center flex-column">
            <h1>Sustav za transfuziologiju</h1>
            <img class="img-fluid my-4" src="/../img/logo.png">
            <b-col  cols="10" lg="4">
                <form method="POST" action="{{ route('login') }}" class="donor-form">
                    @csrf

                    <div class="form-group">
                        <input id="email" type="email" placeholder="Email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="password" type="password" placeholder="Lozinka"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                            <button type="submit" class="btn-donor w-100">
                                Prijava
                            </button>
                    </div>

                    <div class="flex-center flex-column">
                        <a href="{{ route('register') }}">
                            Nemate račun? Registrirajte se!
                        </a>
                        <a href="{{ route('password.request') }}" class="mt-2">
                            Zaboravili ste lozinku ?
                        </a>
                    </div>
                </form>
            </b-col>
        </b-row>
    </b-container>
@endsection
