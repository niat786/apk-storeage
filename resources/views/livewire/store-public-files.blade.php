<div>
    <div class="container p-4 mx-auto my-4 bg-white rounded-xl">
        <div class="flex flex-col justify-end text-gray-500 lg:flex-row xl:max-w-7xl md:gap-4">
            @auth <div class="flex w-full my-1 lg:w-1/6">
                    {{-- <label class="flex items-center text-indigo-600 w-[150px]">Select Files:</label> --}}

                    <select class="w-full p-2 border-gray-200 rounded-lg focus:ring-0" wire:model="storeType">
                        <option value="my_files">My Files</option>
                        <option value="public_store">Public Store</option>

                    </select>
            </div> @endauth
            <div class="flex w-full my-1 lg:w-1/6">


                {{-- <label class="flex items-center text-indigo-600 w-[150px]">Files Type:</label> --}}

                <select wire:model="category" class="w-full p-2 border-gray-200 rounded-lg focus:ring-0">

                    <option value="">Category</option>
                    <option value="apk">Apps</option>
                    <option value="pdf">PDF Files</option>
                    <option value="zip">ZIP Files</option>
                    <option value="txt">TXT Files</option>
                    <option value="image">Images</option>
                </select>
            </div>
            <div class="flex w-full my-1 lg:w-1/4">

                <input type="search" placeholder="search" wire:model.debounce.1000ms="search"
                    class="w-full p-2 border-gray-200 rounded-lg focus:ring-0 ">

            </div>
        </div>
    </div>
    <div class="container p-4 mx-auto bg-white rounded-xl">

        <div class="flex flex-wrap">
            @if ($search)
                <div class="w-full">
                    <h2 class="pb-4 mx-5 my-4 text-xl text-gray-500 border-b">Search Result for <span>
                            "{{ $search }}"</span></h2>

                </div>
            @endif



            @forelse ($all_files as $index => $file)
                <a href="{{ url('show', ['id' => $file->id]) }}"
                    class="flex w-full gap-2 px-3 py-2 rounded md:w-1/2 hover:shadow-sm hover:bg-gray-100">
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
