<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container">
            <nav class="navbar is-light has-shadow" role="navigation" aria-label="dropdown navigation">
                    <button class="button navbar-burger">
                      <span></span>
                      <span></span>
                      <span></span>
                    </button>

                    <a class="navbar-item" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>

                    @guest
                    <div class="navbar-end">
                        <a class="navbar-item" href="{{ route('login') }}">Login</a>
                        <a class="navbar-item" href="{{ route('register') }}">Register</a>
                    </div>
                    @else
                    <div class="navbar-item has-dropdown is-hoverable navbar-end">
                        <a class="navbar-link">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item">ITEM 1</a>
                            <a class="navbar-item">ITEM 2</a>
                            <a class="navbar-item">ITEM 3</a>
                            <hr class="navbar-divider">
                            <a class="navbar-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    @endguest
            </nav>
            <section class="m-t-20">
                @yield('content')
            </section>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
