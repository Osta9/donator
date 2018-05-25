@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Novi donator</h1>
                <form method="POST" action="/donators" class="donor-form">
                    @csrf
                    <div class="form-group">
                        <select name="user_id" class="w-100" required>
                            <option value="0">
                                Molimo odaberite korisnicki mail iz baze
                            </option>
                            @foreach($users as $u)
                                <option value="{{$u->id}}">
                                    {{ $u->email }}
                                </option>
                            @endforeach
                        </select>
                    </div>

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
                        <input id="phone" type="text" placeholder="Telefon"
                               class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                               name="phone" value="{{ old('phone') }}" required autofocus>
                        @if ($errors->has('phone'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="birth_date" type="date" placeholder="Datum rođenja"
                               class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}"
                               name="birth_date" value="{{ old('birth_date') }}" required autofocus>
                        @if ($errors->has('birth_date'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('birth_date') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="blood_type" type="text" placeholder="Krvna grupa"
                               class="form-control{{ $errors->has('blood_type') ? ' is-invalid' : '' }}"
                               name="blood_type" value="{{ old('blood_type') }}" required autofocus>
                        @if ($errors->has('blood_type'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('blood_type') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-donor w-100">
                            Dodaj donatora
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
