<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Topgun') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased text-gray-900 text-sm">

<div class="header flex items-center justify-between text-sm text-gray-900 px-5 py-3">
    <a href="#">
        <img src="{{ asset('img/logo.svg') }}" alt="Laracast logo">
    </a>

    <div class="flex items-center">
        @if (Route::has('login'))
            <div class=" right-0 px-6 py-4 ">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#">
            <div>
                <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94"
                     class="w-10 h-10 rounded-full">
            </div>
        </a>
    </div>
</div>
</body>
</html>
