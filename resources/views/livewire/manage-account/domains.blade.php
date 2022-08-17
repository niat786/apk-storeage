<div class="container px-2 mx-auto my-10">
    <h1 class="w-full my-10 text-2xl text-gray-600">Manage your account</h1>
    <div class="flex flex-wrap">

        <div class="w-full md:w-1/4">
            <h2 class="text-lg font-semibold text-gray-700 ">Your Domains</h2>
            <p>List of your domain names.</p>
            @if (session('success'))
                <p class="p-2 text-green-600">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="p-2 text-rose-600">{{ session('error') }}</p>
            @endif
        </div>
        <div class="w-full md:w-3/4">
            <div class="relative overflow-hidden overflow-x-auto rounded">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Domain
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Subdomain
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Edit
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($domains as $domain)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $domain->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $domain->subdomain }}
                                </td>
                                <td class="px-6 py-4" x-data="{ show: false }">
                                    <a x-on:click="show = !show" href="#" class="text-sky-600" type="button"
                                        data-modal-toggle="authentication-modal">Edit</a>



                                    <!-- Main modal -->
                                    <div x-show="show" tabindex="-1"
                                        class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-gray-300 bg-opacity-50 md:inset-0 h-modal md:h-full"
                                        aria-modal="true" role="dialog">
                                        <div class="relative w-full h-full max-w-md p-4 md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button x-on:click="show = !show" type="button"
                                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                    data-modal-toggle="authentication-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="px-6 py-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                        Edit <span class="text-orange-500">{{ $domain->name }}</span>
                                                    </h3>
                                                    <form class="space-y-6" action="{{ url('account/update-domain') }}"
                                                        method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <div>
                                                            <label
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Domain
                                                                Name</label>
                                                            <input type="text" name="domain_name"
                                                                value="{{ $domain->name }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                                placeholder="name@company.com" required="">
                                                            <input type="hidden" name="id"
                                                                value="{{ $domain->id }}">
                                                        </div>
                                                        <div>
                                                            <label
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subdomain</label>
                                                            <input type="subdomain" name="subdomain"
                                                                value="{{ $domain->subdomain }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                                required="">
                                                        </div>

                                                        <button data-modal-toggle="popup-modal" type="submit"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Save
                                                        </button>
                                                        <button x-on:click="show=!show" data-modal-toggle="popup-modal"
                                                            type="button"
                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                            cancel</button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </td>
                                <td class="px-6 py-4" x-data={show:false}>
                                    <a href="#" class="text-rose-600" x-on:click="show=!show" type="button"
                                        data-modal-toggle="popup-modal">Delete</a>


                                    <div x-show="show" tabindex="-1"
                                        class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto bg-gray-300 bg-opacity-50 md:inset-0 h-modal md:h-full"
                                        aria-modal="true" role="dialog">
                                        <div class="relative w-full h-full max-w-md p-4 md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button x-on:click="show=false" type="button"
                                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                    data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true"
                                                        class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                    <h3
                                                        class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                        Are you sure you want to delete <span
                                                            class="text-orange-500">{{ $domain->name }}</span>?</h3>
                                                    <form action="{{ url('account/delete-domain') }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="hidden" name="id"
                                                            value="{{ $domain->id }}">
                                                        <button data-modal-toggle="popup-modal" type="submit"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Yes, I'm sure
                                                        </button>
                                                        <a x-on:click="show=false"

                                                            class="text-gray-500 cursor-pointer bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                            cancel</a>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @empty
                        <tr>

                             <td class="px-6 py-5 ">
                                No Data ...
                             </td>

                        </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="flex flex-wrap mt-20">

        <div class="w-full md:w-1/4">
            <h2 class="text-lg font-semibold text-gray-700 ">Your Buckets</h2>
            <p>List of your Buckets.</p>

        </div>
        <div class="w-full md:w-3/4">
            <div class="relative overflow-hidden overflow-x-auto rounded">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Domain
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Subdomain
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bucket
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($buckets as $domain)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $domain->domain?->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $domain->domain?->subdomain }}
                                </td>
                                <td class="px-6 py-4" x-data="{ show: false }">
                                    <span class="text-sky-600">{{ $domain->bucket_name }}</span>
                                </td>
                                <td class="px-6 py-4" x-data={show:false}>
                                    <a href="#" class="text-rose-600" x-on:click="show=!show" type="button"
                                        data-modal-toggle="popup-modal">Delete</a>


                                    <div x-show="show" tabindex="-1"
                                        class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto bg-gray-300 bg-opacity-50 md:inset-0 h-modal md:h-full"
                                        aria-modal="true" role="dialog">
                                        <div class="relative w-full h-full max-w-md p-4 md:h-auto">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button x-on:click="show=false" type="button"
                                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                    data-modal-toggle="popup-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-6 text-center">
                                                    <svg aria-hidden="true"
                                                        class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                    <h3
                                                        class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                        Are you sure you want to delete <span
                                                            class="text-orange-500">{{ $domain->bucket_name }}</span>?</h3>
                                                    <form action="{{ url('account/delete-bucket') }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="hidden" name="id"
                                                            value="{{ $domain->id }}">
                                                        <button data-modal-toggle="popup-modal" type="submit"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Yes, I'm sure
                                                        </button>
                                                        <a x-on:click="show=false"
                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 cursor-pointer">No,
                                                            cancel</a>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td class="px-6 py-4">
                               No Data
                            </td>
                        </tr>

                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>

    </div>


</div>
