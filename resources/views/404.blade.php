@extends('layouts.master')
@section('content')
<main class="flex flex-col items-center justify-center w-full h-screen bg-white">
	<h1 class="font-extrabold tracking-widest text-indigo-700 text-9xl">404</h1>
	<div class="absolute px-2 text-sm text-white bg-indigo-500 rounded rotate-12">
		Page Not Found
	</div>
	<a href="/" class="px-6 py-3 mt-5 text-white rounded shadow-md hover:shadow-xl bg-gradient-to-r shadow-indigo-600/30 from-indigo-600 to-indigo-500">
     Home
    </a>
</main>

@endsection
