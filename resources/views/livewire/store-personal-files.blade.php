<div  x-data="{show_spinner:false}">
    <div class="files-upper-div">


        <div class="flex flex-col justify-end text-gray-500 lg:flex-row xl:max-w-7xl md:gap-4 ">



                <div class="flex w-full my-1 lg:w-1/6" >
                    <select x-on:change="show_spinner = true" class="store-dropdown" wire:model="storeType">
                        <option value="my_files">My Files</option>
                        <option value="public_store">Public Store</option>
                    </select>
                </div>

            <div class="flex w-full my-1 lg:w-1/6">

                <select x-on:change="show_spinner = true" wire:model="category" class="store-dropdown">
                    <option value="">Show All</option>
                    <option value="app">Apps</option>
                    <option value="pdf">PDF Files</option>
                    <option value="zip">ZIP Files</option>
                    <option value="txt">TXT Files</option>
                    <option value="image">Images</option>
                </select>
            </div>
            <div class="flex w-full my-1 lg:w-1/4">

                <input type="search" placeholder="search" wire:model.debounce.1000ms="search"
                    class="search-input">

            </div>

            <div x-show="show_spinner" class="flex items-center justify-center m-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 animate-spin" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                  </svg>
            </div>
        </div>
    </div>

    <div class="files-grid-view">
        @if (session('success'))
        <p class="p-2 text-green-600">{{ session('success') }}</p>
    @endif
    @if (session('error'))
        <p class="p-2 text-rose-600">{{ session('error') }}</p>
    @endif

        <div class="flex flex-wrap">


            @if ($search)
                <div class="w-full">
                    <h2 class="pb-4 mx-5 my-4 text-xl text-gray-500 border-b">Search Result for <span>
                            "{{ $search }}"</span></h2>

                </div>
            @endif


            @forelse ($all_files as $index => $file)
            <span x-init="show_spinner = false"></span>
                <a href="{{ url('show', ['id' => $file->id]) }}"
                    class="each-file-in-grid">
                    {{-- <span class="px-2 text-xs text-gray-600 ">
                        {{ $index + 1 }}
                        @if ($index + 1 < 10)
                            &nbsp;
                        @endif
                    </span> --}}
                    @php
                        $ext = explode('.', $file->name);
                        $extension = $ext[count($ext) - 1];
                    @endphp

                    @switch($extension)
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
                    @endswitch


                    <span class="truncate text-ellipsis text-start">{{ $file->name }}</span>
                </a>
                @empty
                <span x-init="show_spinner = false"></span>

                    <div class="mx-auto">
                        <h2 class="py-4 text-2xl text-gray-500">No Files To Show</h2>
                    </div>
                @endforelse


            </div>

        </div>
        <div class="flex items-center justify-center py-5">
            <div id="pagination">

                {{ $all_files->links() }}
            </div>

        </div>
    </div>
</div>

