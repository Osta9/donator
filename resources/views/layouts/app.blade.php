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

            <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

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

    <main>
        @yield('content')
    </main>

</div>
</body>
</html>
