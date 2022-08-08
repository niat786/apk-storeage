<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6118596414140722"
     crossorigin="anonymous"></script>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2V4GKBZDRP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2V4GKBZDRP');
</script>

        <!-- Fonts -->
         {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}



        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
           <!-- Styles -->
           @livewireStyles
    </head>
    <body class="font-sans antialiased">


        <div class="min-h-screen bg-gray-100">


            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>



        @livewireScripts
    </body>
</html>
