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
                        <select name="donator_id" class="w-100" required>
                            <option value="0">
                                Molimo odaberite donatora
                            </option>
                            @foreach($donators as $donator)
                                <option value="{{$donator->id}}">
                                    {{$donator->first_name . ' ' . $donator->last_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="doctor_id" class="w-100" required>
                            <option value="0">
                                Molimo odaberite ljecnika
                            </option>
                            @foreach($doctors as $d)
                                <option value="{{$d->id}}">
                                    {{$d->first_name . ' ' . $d->last_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="assistant_id" class="w-100" required>
                            <option value="0">
                                Molimo odaberite asistenta
                            </option>
                            @foreach($staff as $s)
                                <option value="{{$s->id}}">
                                    {{$s->first_name . ' ' . $s->last_name }}
                                </option>
                            @endforeach
                        </select>
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
                        <input id="blood_sys" type="text" placeholder="Sistolički tlak"
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

                    <div class="form-group flex-center flex-column">
                        <label>Prihvaćen</label>
                        <input id="accepted" type="checkbox" placeholder="Prihvaćen"
                               class="form-control"
                               name="accepted" autofocus>
                    </div>

                    <div class="form-group">
                        <input id="reason" type="textarea" placeholder="Napomena"
                               class="form-control{{ $errors->has('reason') ? ' is-invalid' : '' }}"
                               name="reason" value="{{ old('reason') }}" autofocus>
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
