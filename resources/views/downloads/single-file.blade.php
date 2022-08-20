@extends('layouts/downloads')
@section('content')
<div class="container p-4 mx-auto my-4 bg-white rounded-xl">
    <div class="flex">


    <div class="w-full lg:w-3/4 filename">
        @foreach ($single_file as $file)
            <div class="flex border-b xl:max-w-7xl">

                <h1 class="flex items-center gap-3 my-4 text-xl font-semibold text-gray-600 ">

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

            <div class="px-2 pb-4 mx-auto border-b">
                <h2 class="pb-4 mt-4 text-lg font-semibold text-gray-500 md:mt-6 lg:mt-8">File Info</h2>

                <div class="flex flex-wrap gap-1 md:flex-row xl:max-w-7xl ">
                    <div
                        class="flex items-center w-full px-4 rounded md:w-1/2 bg-gray-50 hover:cursor-pointer hover:shadow-sm h-14 hover:bg-gray-100">
                        <div class="font-semibold">Name:</div>&nbsp;{{ $file->name }}
                    </div>


                    <div
                        class="flex items-center w-full px-4 rounded md:w-1/2 bg-gray-50 hover:cursor-pointer hover:shadow-sm h-14 hover:bg-gray-100">
                        <span class="font-semibold">Size:</span>&nbsp;{{ $file->size }}
                    </div>

                    <div
                        class="flex items-center w-full px-4 rounded md:w-1/2 bg-gray-50 hover:cursor-pointer hover:shadow-sm h-14 hover:bg-gray-100">

                        <span class="font-semibold">Extension:</span>&nbsp;{{ $file->extension }}
                    </div>

                    <div
                        class="flex items-center w-full px-4 rounded md:w-1/2 bg-gray-50 hover:cursor-pointer hover:shadow-sm h-14 hover:bg-gray-100">
                        <span class="font-semibold">Updated:</span>&nbsp;{{ explode(' ', $file->updated_at)[0] }}
                    </div>

                </div>
            </div>


            <div class="px-2 pb-4 mx-auto" x-data="{ copied: 0 }">

                <h2 class="mt-4 text-lg font-semibold text-gray-500 md:mt-6 lg:mt-8">File Download Link
                    &nbsp;<span id="copy-message" x-show="copied" x-transition
                        class="w-full text-xs text-green-600">Link
                        Copied!</span>

                </h2>
                @php
                    $link = "https://apkeve.com/download/files/".$file->user_id."/".$file->name;
                @endphp

                <input type="text" id="d-link" class="input-field" value="{{ $link }}">

                <div class="w-full mx-2">
                    <button class="text-sm button" title="Copy" x-on:click="copied=1" onclick="copy_link()">
                        Copy Link
                    </button>
                </div>

            </div>


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
    <div class="hidden w-1/4 h-screen p-4 bg-white rounded lg:block">
@livewire('ads.responsive')
    </div>

    </div>


</div>

@endsection
