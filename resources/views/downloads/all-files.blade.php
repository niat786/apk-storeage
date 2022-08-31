@extends('layouts/downloads')

@section('content')
<div>
    <div class="files-upper-div">
        <div class="flex flex-col justify-end text-gray-500 lg:flex-row xl:max-w-7xl md:gap-4">


            <div class="flex w-full my-1 lg:w-1/4">

                <input type="search" placeholder="search" wire:model.debounce.1000ms="search"
                    class="search-input">

            </div>
        </div>
    </div>
    <div class="files-grid-view">
        @livewire('ads.responsive')


        <div class="flex flex-wrap">

            @forelse ($files as $index => $file)
                <a href="{{ url('download-file/show', ['id' => $file->id]) }}"
                    class="each-file-in-grid">

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

                {{ $files->links() }}
            </div>

        </div>
    </div>
    </div>

@endsection
