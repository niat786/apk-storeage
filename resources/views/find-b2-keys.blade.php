
@extends('layouts.master')
@section('content')
<div class="container mx-auto my-5">
<div class="p-4 bg-white rounded-lg">
    <div class="px-2 pb-4 mx-auto border-b">
        <h2 class="pb-4 mt-4 text-2xl font-semibold text-gray-600">How to find backblaze account keys and Bucket ID?</h2>

    </div>
    <div class="p-2 mt-4">
        <p class="text-lg font-semibold text-gray-600">Get started to connect Backblaze account with the following steps:</p>
        <ul class="px-4 my-3 text-lg text-indigo-500">
            <li>
                Create an account or signin to backblaze account
            </li>
            <li>
                Go to "App Keys" in the "Account" section on sidebar.
            </li>
            <li>Click App Keys</li>

        </ul>
        <div class="flex flex-col justify-center w-full py-2 lg:w-1/2">
            <img class="my-4 shadow-lg" src="{{ asset('find-app-keys/select-app-keys.webp') }}" alt="find app keys">
            <div class="p-2 my-2">
                <p class="text-lg text-indigo-500">Generate a New Key
                </p>
            </div>
            <img class="my-4 shadow-lg" src="{{ asset('find-app-keys/name-of-key.webp') }}" alt="name of app keys">

            <div class="p-2 my-2">
                <p class="text-lg text-indigo-500">Copy the keys
                </p>
            </div>
            <img class="my-4 shadow-lg" src="{{ asset('find-app-keys/app-keys-copy.webp') }}" alt="name of app keys">


            <div class="p-2 my-2">
                <p class="text-lg text-indigo-500">Now Find Bucket ID and name
                </p>
            </div>
            <img class="my-4 shadow-lg" src="{{ asset('find-app-keys/bucket.webp') }}" alt="name of app keys">


        </div>

    </div>
</div>
</div>
@endsection
