@extends('layouts/downloads')

@section('content')
    <div>
        <div class="files-upper-div">
            <div class="flex flex-col justify-end text-gray-500 lg:flex-row xl:max-w-7xl md:gap-4">


                <div class="flex w-full my-1 lg:w-1/4">

                    <input type="search" placeholder="search" wire:model.debounce.1000ms="search" class="search-input">

                </div>
            </div>
        </div>
        <div class="files-grid-view">

            <div class="flex flex-wrap">

                @forelse ($files as $index => $file)
                    <div class="each-file-in-grid" x-data={showDeleteNodal:false}>
                        <span class="text-sm truncate text-ellipsis text-start">{{ $file->name }} </span>


                        {{-- @php
                        $ext = explode('.', $file->name);
                        $extension = $ext[count($ext) - 1];
                    @endphp --}}
                        {{-- <div class="flex"> --}}
                        {{-- @switch($extension)
                            @case('apk')
                                <livewire:icons.apk-svg-icon :file="$extension" :wire:key="$file->id" />
                            @break

                            @case('pdf')
                                <livewire:icons.pdf-svg-icon :file="$extension" :wire:key="$file->id" />
                            @break

                            @case('txt')
                                <livewire:icons.txt-svg-icon :file="$extension" :wire:key="$file->id" />
                            @break

                            @case('zip')
                                <livewire:icons.zip-svg-icon :file="$extension" :wire:key="$file->id" />
                            @break

                            @case('png')
                            @case('jpg')

                            @case('jpeg')
                            @case('webp')

                            @case('svg')
                            @case('bmp')

                            @case('psd')
                                <livewire:icons.img-svg-icon :file="$extension" :wire:key="$file->id" />
                            @break

                            @default
                                <livewire:icons.ext-svg-icon :file="$extension" :wire:key="$file->id" />
                        @endswitch --}}
                        {{-- </div> --}}
                        <div
                            class="flex justify-between text-xs text-gray-700 truncate dark:text-gray-50 text-ellipsis text-start">

                            <div class="mr-5">{{ $file->size }}</div>



                            <div class="flex items-center gap-2" x-data="{ linkCopied: false }">

                                <button id="linkCopiedMessage-{{ $file->id }}"
                                    x-on:click="()=>{
                                 navigator.clipboard.writeText('{{ $file->download_link }}');
                                 document.getElementById('linkCopiedMessage-{{ $file->id }}').innerText='Copied!';
                                 setTimeout(() => {
                                document.getElementById('linkCopiedMessage-{{ $file->id }}').innerText='Copy Link';
                            }, 3000);
                            }"
                                    class="px-2 py-1 text-xs bg-green-500 rounded text-gray-50">
                                    copy link</button>
                                <button class="px-2 py-1 rounded bg-rose-500 text-gray-50"
                                    x-on:click="showDeleteNodal=!showDeleteNodal" data-modal-toggle="popup-modal"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                        class="" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg></button>



                            </div>

                            {{-- modal for delete --}}
                            <div x-cloak x-show="showDeleteNodal" tabindex="-1"
                                class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto bg-gray-300 bg-opacity-50 md:inset-0 h-modal md:h-full"
                                aria-modal="true" role="dialog">
                                <div class="relative w-full h-full max-w-md p-4 md:h-auto">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button x-on:click="showDeleteNodal=false" type="button"
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
                                            <svg aria-hidden="true"
                                                class="w-10 h-10 mx-auto mb-4 text-gray-400 dark:text-gray-200"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                            </svg>
                                            <p class="mb-5 font-normal text-gray-500 dark:text-gray-400">
                                                Are you sure you want to delete<br><span
                                                    class="text-orange-500 truncate text-ellipsis">{{ $file->name }}</span>?
                                            </p>
                                            <form action="{{ url('delete-file') }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $file->id }}">
                                                <button data-modal-toggle="popup-modal" type="submit"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-xs inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                    Yes, I'm sure
                                                </button>
                                                <a x-on:click="showDeleteNodal=false"
                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-xs font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 cursor-pointer">No,
                                                    cancel</a>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- modal for delete prompt ends --}}

                        </div>


                    </div>
                @empty
                    <span x-init="show_spinner = false"></span>

                    <div class="mx-auto">
                        <h2 class="py-4 text-2xl text-gray-500">No Files To Show</h2>
                    </div>
                @endforelse



            </div>
            <hr class="my-5">
            <div class="flex items-center justify-center py-5">
                <div id="pagination">

                    {{ $files->links() }}
                </div>

            </div>
        </div>

    </div>

    </div>
@endsection
