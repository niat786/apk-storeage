<div class="container max-w-6xl mx-auto my-12 overflow-hidden rounded-lg shadow-lg ">

    <div class="flex justify-start p-6 bg-white border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">

        <div class="flex items-center mt-4 text-lg font-semibold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-violet-600 dark:text-purple-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="text-pink-600 dark:text-purple-500" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                <path fill-rule="evenodd"
                    d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
            </svg>&nbsp;Upload To Public Store
        </div>
    </div>

    <div class="grid grid-cols-1 bg-gray-100 bg-opacity-25 md:grid-cols-2 dark:bg-gray-700">
        <div class="p-6 ">

            <div class="flex items-center">


                <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300 ">
                    Use File URL
                </div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">

                    If you have a file link then enter the link. We will process it for you.
                    <p class="my-4"><a href="{{ url('store/upload-online-file') }}" class='button'>Upload</a></p>
                </div>
            </div>
        </div>
        <div class="p-6 border-t border-gray-200 dark:border-gray-600 md:border-t-0 md:border-l">
            <div class="flex items-center">
                <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300 ">
                    Upload From Computer</div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">

                    Select files from you device and upload it.
                    <p class="my-4"><a href="{{ url('store/upload-local-file') }}" class='button'>Upload</a></p>

                </div>
            </div>
        </div>
    </div>



    <div class="flex justify-start p-6 bg-white border-t border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">

        <div class="flex items-center mt-4 text-lg font-semibold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-violet-600 dark:text-purple-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-pink-600 dark:text-purple-500"
                viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>&nbsp;Upload To Your Own Backblaze Account
        </div>

    </div>
    <div class="grid grid-cols-1 bg-gray-100 bg-opacity-25 md:grid-cols-2 dark:bg-gray-700">
        <div class="p-6 ">

            <div class="flex items-center">

                <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300 ">
                    Use File URL
                </div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">

                    If you have a file link then enter the link. We will process it for you.
                    <p class="my-4"><a href="{{ url('upload-online-file') }}" class='button'>Upload</a></p>
                </div>
            </div>
        </div>
        <div class="p-6 border-t border-gray-200 dark:border-gray-600 md:border-t-0 md:border-l">
            <div class="flex items-center">
                <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300 ">
                    Upload From Computer</div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">

                    Select files from you device and upload it.
                    <p class="my-4"><a href="{{ url('upload-local-file') }}" class='button'>Upload</a></p>

                </div>
            </div>
        </div>
    </div>




</div>
