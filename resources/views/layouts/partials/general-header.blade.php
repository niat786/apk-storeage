<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apkeve - Upload and Download Files</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @include('scripts/analytics')

</head>

<body>

    <header>

        <nav x-data="{ show_mobile_menu: false }" class=" px-2 z-50 shadow sm:px-4 py-2.5 bg-gray-900 fixed w-full  top-0 left-0 ">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="/" class="flex items-center text-white dark:text-gray-200">
                    <img width="140" src="{{ asset('APKeve-logo/logo.webp') }}" class="block h-auto w-2/10"
                        alt="logo">

                    {{-- <img src="{{ asset('/images/logo.svg') }}" class="w-auto h-8 ml-3 mr-2 sm:h-9" alt="site Logo"> --}}
                    {{-- <span class="self-center text-xl font-semibold text-white whitespace-nowrap">Files</span> --}}
                </a>
                <div class="flex items-center md:order-2">

                    <a href="{{ url('download-file/files') }}" class="mx-2 text-sm text-white dark:text-gray-200">Public
                        Files</a>
                    @auth
                        <a href="{{ url('upload-online-file') }}" class="mx-2 text-sm text-white dark:text-gray-200">Upload
                            Files</a>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" class="mx-2 text-sm text-white dark:text-gray-200">Login</a>
                        <a href="{{ route('register') }}" class="mx-2 text-sm text-white dark:text-gray-200">Signup</a>

                    @endguest

                    <button x-on:click="show_mobile_menu = !show_mobile_menu" data-collapse-toggle="navbar-sticky"
                        type="button"
                        class="items-center hidden p-2 text-sm text-gray-500 rounded-lg inline-flexs md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <div x-transition x-on:click.away="show_mobile_menu = false" x-show="show_mobile_menu"
                    :class="'show_mobile_menu' ?? 'hidden'"
                    class="items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium ">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded dark:text-gray-200 md:bg-transparent md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white rounded dark:text-gray-200 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Public
                                Files</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
