<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'ApkEve') }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png')}} ">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png')}} ">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png')}} ">
        <link rel="manifest" href="{{asset('favicons/site.webmanifest')}}">
        <link rel="mask-icon" href="{{asset('safari-pinned-tab.svg')}}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

            {{-- meta tags --}}
        <meta name="title" content="ApkEve - Free file uploading & download link generator for your domain">
        <meta name="description" content="Upload files and generate their download links as a subdomain of your primary domain. Connect Backblaze account and create downloadable links of files for free.">
        <meta name="keywords" content="GUI to Upload files to cloud storage, Upload files & generate downloadable links, Generate download links as a subdomain">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
            {{-- meta tags end --}}

        @include('scripts/analytics')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>
    </body>
</html>
