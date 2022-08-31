<div class="h-full pb-20">
    @include('navigation-menu')
    <div class="container flex gap-4 p-4 mx-auto my-2 overflow-hidden rounded-lg">
        <div class="flex w-full p-2 rounded-lg">
            {{-- {{ $users[0] }} --}}
            <div class="hidden w-1/4 px-4 mx-2 bg-white rounded-lg shadow-lg md:block">
                <div class="my-4 text-gray-900 dark:bg-gray-800">
                    <span class="text-lg font-semibold text-left text-gray-700">Menu</span>
                </div>
                <ul class="mt-4 space-y-2">

                    <li><a href="{{ url('admin/files') }}">All Files</a></li>
                    <li><a href="{{ url('admin/public-files') }}">Public Files</a></li>
                </ul>
            </div>
            <div class="w-full md:w-3/4">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <caption
                            class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            All Users
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of
                                Flowbite products designed to help you work and play, stay organized, get answers, keep
                                in touch, grow your business, and more.</p>
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-6 py-4">
                                    S. No
                                </th>
                                {{-- <th scope="col" class="px-6 py-3">
                                    Avatar
                                </th> --}}
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Registered
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $key + 1 }}
                                    </td>
                                    {{-- <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="rounded" src="{{$user->profile_photo_url}}" alt="{{$user->name}}-image" width="50">
                                </td> --}}
                                    <td class="px-6 py-4">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ explode(' ', $user->created_at)[0] }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <div class="container w-1/2 mx-auto my-10">

        {{ $users->links() }}
    </div>
</div>
