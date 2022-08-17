<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Download File') }}</title>
    @include('scripts/ads')
    @include('scripts/analytics')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        <nav  class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex items-center shrink-0">
                            <a href="{{ route('dashboard') }}">
                                <img src="{{ asset('logo.webp') }}" class="block w-auto h-32" alt="logo">

                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="flex space-x-8 sm:-my-px sm:ml-10">

                            <x-jet-nav-link href="{{ route('upload') }}" :active="request()->routeIs('upload')">
                                {{ __('Upload Files') }}
                            </x-jet-nav-link>

                            <x-jet-nav-link href="{{ route('my-files') }}" :active="request()->routeIs('my-files')">
                                {{ __('All Files') }}
                            </x-jet-nav-link>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>
</html>
