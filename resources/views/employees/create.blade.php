@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Novi donator</h1>
                <form method="POST" action="/employees" class="donor-form">
                    @csrf
                    <div class="form-group">
                        <input id="first_name" type="text" placeholder="Ime"
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
                               class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                               name="last_name" value="{{ old('last_name') }}" required autofocus>
                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <select class="form-control w-100"
                               name="title" required autofocus>
                            <option value="0">Odaberi titulu</option>
                            <option value="doktor">Doktor</option>
                            <option value="osoblje">Osoblje</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-donor w-100">
                            Dodaj zaposlenika
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
