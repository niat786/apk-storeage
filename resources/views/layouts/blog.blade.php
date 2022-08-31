<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.header')

<body class="dark:bg-gray-800">
    <div class="min-h-screen">
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
