<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HM app</title>
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
</head>
<body>
<nav class="navbar navbar-expand-md navbar-laravel navbar-dark bg-dark text-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{--{{ config('app.name', 'Laravel') }}--}}
            Hospitality Management App
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li><a class="nav-link" href="{{ action('HomeController@index') }}">Home</a></li>
            @can('edit')
                <li><a class="nav-link" href="{{ action('ApartmentController@index') }}">Apartments</a></li>
                @endcan
                <li><a class="nav-link" href="{{ action('TaskController@index') }}">Tasks</a></li>
                <li><a class="nav-link" href="{{ action('FormController@index') }}">Forms</a></li>
                <li><a class="nav-link" href="{{ action('EventController@index') }}">Calendar</a></li>
                <li><a class="nav-link" href="{{ action('UserController@index') }}">Users</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div id="app"></div>

<script src="{{mix('js/app.js')}}" ></script>
</body>
</html>

