<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <b-container>
        <b-navbar toggleable="md" type="light" class="donor-navbar">

            <b-navbar-toggle target="nav_collapse">
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
            </b-navbar-toggle>

            <b-navbar-brand href="#" class="flex-center">
                <img class="img-fluid" src="/../img/brand.png">
            </b-navbar-brand>

            <b-collapse is-nav id="nav_collapse">

                <b-navbar-nav>
                    <b-nav-item href="{{ route('welcome') }}"
                                class="{{ strpos(Route::currentRouteName(), 'welcome') === 0 ? 'active' : null }}">
                        Naslovnica
                    </b-nav-item>
                    @guest
                        <b-nav-item href="{{ route('login') }}"
                                    class="{{ strpos(Route::currentRouteName(), 'login') === 0 ? 'active' : null }}">
                            Prijava
                        </b-nav-item>
                        <b-nav-item href="{{ route('register') }}"
                                    class="{{ strpos(Route::currentRouteName(), 'register') === 0 ? 'active' : null }}">
                            Registracija
                        </b-nav-item>
                    @endguest
                    @auth
                        @if(Auth::user()->isAdmin())
                            <b-nav-item href="/donators"
                                        class="{{ strpos(Route::currentRouteName(), 'donators') === 0 ? 'active' : null }}">
                                Donatori
                            </b-nav-item>
                            <b-nav-item href="/events"
                                        class="{{ strpos(Route::currentRouteName(), 'events') === 0 ? 'active' : null }}">
                                Događaji
                            </b-nav-item>
                            <b-nav-item href="/arrivals"
                                        class="{{ strpos(Route::currentRouteName(), 'arrivals') === 0 ? 'active' : null }}">
                                Dolasci
                            </b-nav-item>
                            <b-nav-item href="/employees"
                                        class="{{ strpos(Route::currentRouteName(), 'employees') === 0 ? 'active' : null }}">
                                Zaposlenici
                            </b-nav-item>
                        @endif
                    @endauth
                </b-navbar-nav>
                @auth
                    <b-navbar-nav class="ml-auto">
                        <b-nav-item href="{{ route('home') }}">
                            {{ Auth::user()->email }}
                        </b-nav-item>
                        <b-nav-item-dropdown right>
                            <b-dropdown-item @click="logout">
                                Odjava
                            </b-dropdown-item>
                        </b-nav-item-dropdown>
                    </b-navbar-nav>
                @endauth
            </b-collapse>
        </b-navbar>
    </b-container>

    <b-container fluid id="main" class="flex-center my-4 p-0">
        @yield('content')
    </b-container>

    <b-row id="footer" class="flex-center col-12">
        <b-col cols="8">
            <hr class="hr-red">
        </b-col>
        <b-col cols=5>
            <footer class="text-center my-3">Sustav za transfuziologiju @ 2018.</footer>
        </b-col>
    </b-row>
</div>
</body>
</html>
