<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | PRACRITI 2.0 IITD</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/samarkan" rel="stylesheet" />
    <!-- Styles -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap"
      rel="stylesheet"
    />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="p-1 text-white justify-content-center" style="background-color: #c21717;">
        <div class="d-flex justify-content-center align-items-center">
            <a target="_blank" href="http://iitd.ac.in/">
                <img class="m-2" style="width: 50px; height: 50px;" src="{{URL::asset('iitd_logo.png')}}" alt="IITD" id="iitd-logo" />
            </a>
            <div class="m-2" style="font-family: 'Samarkan Normal', 'Samarkan', sans-serif;"><h1>PRACRITI 2.0</h1></div>
        </div>
    </header>
    <nav class="navbar navbar-expand">
        @yield('nav')
    </nav> 
    <!--
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar 
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar 
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links 
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        -->
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
