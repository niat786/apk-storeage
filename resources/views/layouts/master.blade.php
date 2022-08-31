<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ApkEve') }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }} ">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }} ">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }} ">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{-- meta tags --}}
    <meta name="title" content="ApkEve - Free file uploading & download link generator for your domain">
    <meta name="description"
        content="Upload files and generate their download links as a subdomain of your primary domain. Connect Backblaze account and create downloadable links of files for free.">
    <meta name="keywords"
        content="GUI to Upload files to cloud storage, Upload files & generate downloadable links, Generate download links as a subdomain">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    {{-- meta tags end --}}

    @include('scripts/analytics')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
</head>

<body class="dark:bg-gray-800">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100 dark:bg-gray-800">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow ">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    @stack('modals')
    @include('layouts.partials.footer')
    @livewireScripts()

</body>

</html>
