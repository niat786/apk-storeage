<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.header')

<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100 ">
        <div class="py-10">
            @include('layouts.partials.navbar')
        </div>

        <main>
            @yield('content')
        </main>
    </div>

    @include('layouts.partials.footer')
</body>

</html>
