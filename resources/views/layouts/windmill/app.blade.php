<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Windmill Dashboard') }} | @yield('title', 'Windmill')</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">

    @livewireStyles

    {{-- Scripts --}}
    <script src="{{ asset('js/init-alpine.js') }}" defer></script>

    <script src="{{ url(mix('js/app.js')) }}"></script>

</head>

<body>
<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    @include('partials.sidebar.main-sidebar')

    <div class="flex flex-col flex-1 w-full">
        @include('partials.navbar.main-navbar')
        <main class="h-full overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                @yield('content')
            </div>
        </main>
    </div>
</div>
@yield('js')
@livewireScripts
</body>

</html>
