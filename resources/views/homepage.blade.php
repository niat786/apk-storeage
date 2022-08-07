<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<body>


    <div>
        <nav  x-data="{show_mobile_menu: false}" class=" px-2 z-50 shadow sm:px-4 py-2.5 bg-gray-900 fixed w-full  top-0 left-0 ">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="https://apkeve.com/" class="flex items-center text-white">
                    <img src="{{asset('/images/logo.svg')}}" class="w-auto h-8 ml-3 mr-2 sm:h-9" alt="site Logo">
                    <span class="self-center text-xl font-semibold text-white whitespace-nowrap">Files</span>
                </a>
                <div class="flex items-center md:order-2">

                    <a href="#" class="mx-2 text-sm text-white">Files</a>
                    @auth
                    <a href="{{ route('dashboard') }}" class="mx-2 text-sm text-white">Upload Files</a>
                    @endauth
                    @guest
                    <a href="{{ route('login') }}" class="mx-2 text-sm text-white">Login</a>
                    <a href="{{ route('register') }}" class="mx-2 text-sm text-white">Signup</a>

                    @endguest

                    <button x-on:click="show_mobile_menu = !show_mobile_menu" data-collapse-toggle="navbar-sticky" type="button"
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

                <div x-transition x-on:click.away="show_mobile_menu = false"  x-show="show_mobile_menu" :class="'show_mobile_menu' ?? 'hidden'" class="items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium ">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Public Files</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="w-full flex items-center h-[70vh] lg:h-screen p-5 bg-gradient-to-tr from-purple-700  to-purple-300 pt-44">
    <div class="container flex flex-wrap mx-auto">

            <div class="mx-auto md:w-1/2 md:p-10">
                <h2 class="text-3xl font-semibold tracking-wide text-center text-white sm:text-4xl">Upload File and Get Download Link
                    As a Subdomain of Your Site</h2>
                <p class="w-full p-2 mx-auto mt-4 tracking-wider text-center text-white ">Upload files from your device
                    or use a URL. Our service will generate a download link for your domain.</p>
                <div class="flex justify-center w-full">
                    @auth
                    <a href="{{ route('dashboard') }}" class="button-white">Upload Files</a>
                    @endauth
                    @guest
                    <a href="{{ route('login') }}" class="button-white">Upload Files</a>
                    @endguest
                </div>
            </div>

            <div class="p-10 mx-auto md:w-1/2">

                <img src="{{ asset('/images/home.svg') }}" alt="homepage image">
            </div>

        </div>
    </div>


    <section class="relative text-gray-600sss body-font">

        <div class="container flex flex-col items-center px-5 py-24 mx-auto md:flex-row">

            <div
                class="flex flex-col items-center mb-16 text-center lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0">
                <h1 class="mb-4 text-3xl font-medium text-gray-900 title-font sm:text-4xl">Add Your Domain & Subdomain
                    <br class="hidden lg:inline-block">Generate download links
                </h1>
                <p class="mb-8 leading-relaxed">To get readable download links for files on your website, use your domain and subdomain name. You may enter as many domains as you wish.</p>
                <div class="flex justify-center">
                    @auth
                    <a href="{{ route('dashboard') }}" class="button">Add Now</a>
                    @endauth
                    @guest
                    <a href="{{ route('login') }}" class="button">Add Now</a>
                    @endguest

                </div>
            </div>


            <div class="w-5/6 lg:max-w-lg lg:w-full md:w-1/2">
                <img class="object-cover object-center rounded" alt="hero" src="{{asset('/images/add_files.svg')}}">
            </div>
        </div>
    </section>
    <section class="text-gray-600 bg-gray-100 body-font">
        <div class="container flex flex-col items-center px-5 py-24 mx-auto md:flex-row">
            <div class="w-5/6 mb-10 lg:max-w-lg lg:w-full md:w-1/2 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="{{asset('/images/connect.svg')}}">
            </div>
            <div
                class="flex flex-col items-center text-center lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 md:items-start md:text-left">
                <h1 class="mb-4 text-3xl font-medium text-gray-900 title-font sm:text-4xl">Connect Your Backblaze Account

                </h1>
                <p class="mb-8 leading-relaxed">You may link your Backblaze account. It will make it easier for you to upload files to your B2 account.</p>
                <div class="flex justify-center">
                    @auth
                    <a href="{{ route('dashboard') }}" class="button">Connect</a>
                    @endauth
                    @guest
                    <a href="{{ route('login') }}" class="button">Connect</a>
                    @endguest

                </div>
            </div>
        </div>
    </section>


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <h1 class="mb-20 text-2xl font-medium text-center text-gray-900 sm:text-3xl title-font">
            Best Features
          </h1>
          <div class="flex flex-wrap -mx-4 -mt-4 -mb-10 space-y-6 sm:-m-4 md:space-y-0">
            <div class="flex p-4 md:w-1/3">
              <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mb-4 text-indigo-500 bg-indigo-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                    <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                  </svg>
              </div>
              <div class="flex-grow pl-6">
                <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">
                    Readable download links
                </h2>
                <p class="text-base leading-relaxed">You will be able to generate download links for your files that are simple, short, and readable.</p>

              </div>
            </div>
            <div class="flex p-4 md:w-1/3">
              <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mb-4 text-indigo-500 bg-indigo-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                  </svg>
              </div>
              <div class="flex-grow pl-6">
                <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">
                   Saves your bandwidth
                </h2>
                <p class="text-base leading-relaxed">If you only have a limited amount of storage space, you can upload files to our public store. It will make it simple to share your file in a efficient manner.</p>

              </div>
            </div>
            <div class="flex p-4 md:w-1/3">
              <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mb-4 text-indigo-500 bg-indigo-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                  </svg>
              </div>
              <div class="flex-grow pl-6">
                <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">Easy file management</h2>
                <p class="text-base leading-relaxed">Keep track of files and make changes as needed. You can easily view, update, and delete files.</p>

              </div>
            </div>
          </div>
        </div>
      </section>




    {{-- footer --}}

    <footer class="p-4 bg-gray-900 shadow md:px-6 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://apkeve.com/" class="flex items-center mb-4 sm:mb-0">
                <img src="{{asset('/images/logo.svg')}}" class="w-auto h-8 ml-3 mr-2 sm:h-9" alt="site Logo">
                <span class="self-center text-2xl font-semibold text-gray-400 whitespace-nowrap">Files</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-400 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-500 sm:mx-auto dark:border-gray-700 lg:my-8">
        <span class="block text-sm text-gray-400 sm:text-center">© 2022 <a
                href="https://apkeve.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
        </span>
    </footer>

</body>

</html>
