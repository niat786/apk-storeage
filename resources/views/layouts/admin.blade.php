<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.header')

<body>
    <div id="admin-root" class="bg-gray-200">
        @yield('content')
    </div>

    @include('layouts.partials.footer')
    @livewireScripts()


</body>

</html>
