<footer class="p-4 bg-gray-900 shadow md:px-6 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="/" class="flex items-center mb-4 sm:mb-0">
            <img width="150" src="{{ asset('APKeve-logo/logo-light.webp') }}" class="w-auto h-10 ml-3 mr-2 sm:h-9"
                alt="site Logo">
            {{-- <span class="self-center text-2xl font-semibold text-gray-400 whitespace-nowrap">Files</span> --}}
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-400 sm:mb-0 dark:text-gray-400">
            <li>
                <a href="{{ url('page/about-us') }}" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="{{ url('page/privacy-policy') }}" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="{{ url('page/contact-us') }}" class="mr-4 hover:underline md:mr-6">Contact</a>
            </li>
              <li>
                <a href="{{ url('page/disclaimer') }}" class="mr-4 hover:underline md:mr-6">Disclaimer</a>
            </li>
        </ul>
    </div>
    <hr class="my-6 border-gray-500 sm:mx-auto dark:border-gray-700 lg:my-8">
    <span class="block text-sm text-gray-400 sm:text-center"  x-data="{ year: new Date().getFullYear() }">© <span x-text="year"></span> <a href="/"
            class="hover:underline">ApkEve™</a>. All Rights Reserved.
    </span>



</footer>
