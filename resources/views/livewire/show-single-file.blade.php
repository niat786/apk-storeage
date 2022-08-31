<div class="single-file-container">
    <div class="flex">


    <div class="w-full lg:w-3/4 filename">
        @foreach ($single_file as $file)
            <div class="flex border-b dark:border-gray-600 xl:max-w-7xl">

                <h1 class="single-file-name">

                    @switch($file->extension)
                        @case('apk')
                            <livewire:icons.apk-svg-icon />
                        @break

                        @case('pdf')
                            <livewire:icons.pdf-svg-icon />
                        @break

                        @case('txt')
                            <livewire:icons.txt-svg-icon />
                        @break

                        @case('zip')
                            <livewire:icons.zip-svg-icon />
                        @break

                        @case('png')
                        @case('jpg')
                        @case('jpeg')
                        @case('webp')
                        @case('svg')
                        @case('bmp')
                        @case('psd')
                            <livewire:icons.img-svg-icon />
                        @break

                        @default
                            <livewire:icons.ext-svg-icon />
                    @endswitch
                    {{ $file->name }}
                </h1>


            </div>

            <div class="px-2 pb-4 mx-auto border-b dark:border-gray-600">
                <h2 class="single-file-h2">File Info</h2>

                <div class="flex flex-wrap gap-1 md:flex-row xl:max-w-7xl ">
                    <div
                        class="single-file-label">
                        <div class="font-semibold">Name:</div>&nbsp;{{ $file->name }}
                    </div>


                    <div
                        class="single-file-label">
                        <span class="font-semibold">Size:</span>&nbsp;{{ $file->size }}
                    </div>

                    <div
                        class="single-file-label">

                        <span class="font-semibold">Extension:</span>&nbsp;{{ $file->extension }}
                    </div>

                    <div
                        class="single-file-label">
                        <span class="font-semibold">Updated:</span>&nbsp;{{ explode(' ', $file->updated_at)[0] }}
                    </div>

                </div>
            </div>


            <div class="px-2 pb-4 mx-auto" x-data="{ copied: 0 }">

                <h2 class="single-file-h2">File Download Link
                    &nbsp;<span x-cloak id="copy-message" x-show="copied" x-transition
                        class="w-full text-xs text-green-600">Link
                        Copied!</span>

                </h2>

                @php
                $link = $file->download_link;
                if($file->b2_account_type == 'public') {
                    $link = "https://apkeve.com/download-file/files/".$file->user_id."/".$file->name;
                }
                @endphp

                <input type="text" id="d-link" class="input-field" value="{{ $link }}">

                <div class="w-full mx-2">
                    <button class="text-sm button" title="Copy" x-on:click="copied=1" onclick="copy_link()">
                        Copy Link
                    </button>
                </div>

            </div>

            @if($file->user_id == Auth::User()->id)

            <div class="px-2 pb-4 mx-auto border-t dark:border-gray-600" x-data="{ show: false }">
                <h2 class="single-file-h2">File Options</h2>

                <div class="flex flex-wrap items-center my-5 space-x-5" x-on:click="show=!show" type="button"
                    data-modal-toggle="popup-modal">
                    <div class="flex items-center font-semibold text-rose-500 hover:cursor-pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="" viewBox="0 0 16 16">
                            <path
                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>&nbsp;&nbsp;Delete File
                    </div>

                </div>
                <div x-cloak x-show="show" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto bg-gray-300 bg-opacity-50 md:inset-0 h-modal md:h-full"
                    aria-modal="true" role="dialog">
                    <div class="relative w-full h-full max-w-md p-4 md:h-auto">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button x-on:click="show=false" type="button"
                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                data-modal-toggle="popup-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">
                                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                    Are you sure you want to delete <span
                                        class="text-orange-500">{{ $file->name }}</span>?</h3>
                                <form action="{{ url('delete-file') }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $file->id }}">
                                    <button data-modal-toggle="popup-modal" type="submit"
                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </button>
                                    <a x-on:click="show=false"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 cursor-pointer">No,
                                        cancel</a>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endif
        @endforeach
        <script>
            function copy_link() {
                let field = document.getElementById('d-link');
                field.select();
                field.setSelectionRange(0, 99999);
                navigator.clipboard.writeText(field.value);
                showMessage();
            }
            let showMessage = () => setTimeout(() => {
                document.getElementById('copy-message').classList.add('hidden');
            }, 5000);
        </script>
    </div>
    <div class="single-file-sidebar">
        @livewire('ads.responsive')
            </div>

    </div>


</div>
