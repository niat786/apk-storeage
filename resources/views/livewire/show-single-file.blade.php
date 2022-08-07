<div class="container p-4 mx-auto my-4 bg-white rounded-xl">
    <div class="filename">
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
                        <span
                            class="font-semibold">Size:</span>&nbsp;{{$file->size}}
                    </div>

                    <div
                        class="flex items-center w-full px-4 rounded md:w-1/2 bg-gray-50 hover:cursor-pointer hover:shadow-sm h-14 hover:bg-gray-100">

                        <span class="font-semibold">Extension:</span>&nbsp;{{ $file->extension }}
                    </div>

                    <div
                        class="flex items-center w-full px-4 rounded md:w-1/2 bg-gray-50 hover:cursor-pointer hover:shadow-sm h-14 hover:bg-gray-100">
                        <span class="font-semibold">Updated:</span>&nbsp;{{ $file->updated_at->diffForHumans() }}
                    </div>

                </div>
            </div>


            <div class="px-2 pb-4 mx-auto" x-data="{ copied: 0 }">

                <h2 class="mt-4 text-lg font-semibold text-gray-500 md:mt-6 lg:mt-8">File Download Link
                    &nbsp;<span id="copy-message" x-show="copied" x-transition
                        class="w-full text-xs text-green-600">Link
                        Copied!</span>

                </h2>




                <input type="text" id="d-link" class="input-field" value="{{ $file->download_link }}">

                <div class="w-full mx-2">
                    <button class="button" title="Copy" x-on:click="copied=1" onclick="copy_link()">
                        Copy Link
                    </button>
                </div>



            </div>

            <div class="px-2 pb-4 mx-auto border-t">
                <h2 class="mt-4 text-lg font-semibold text-gray-500 md:mt-6 lg:mt-8">File Options</h2>


                <div class="flex flex-wrap items-center my-5 space-x-5" id="delete-file">
                    <div class="flex items-center font-semibold text-rose-500 hover:cursor-pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="" viewBox="0 0 16 16">
                            <path
                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>&nbsp;&nbsp;Delete File
                    </div>
                    {{-- <div class="flex items-center font-semibold text-indigo-500 hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>&nbsp;&nbsp;Update File
                    </div> --}}
                </div>

                {{-- conform delete file --}}
                <div class="hidden" id="showDeleteFields">
                    <div>
                        <label for="conform-delete-field" class="text-gray-500">Input File Name and Conform
                            Delete</label>
                    </div>
                    <div>
                        <input id="conform-delete-field" type="text" oninput="check_conform()" class="input-field">
                    </div>
                    <div>
                        <button class="button hover:cursor-pointer" id="conform-delete-btn">Conform Delete</button>
                    </div>

                </div>
                <script>
                    let d_btn = document.getElementById('conform-delete-btn');
                    let showDeleteField = document.getElementById('delete-file');
                    let showDeleteFields = document.getElementById('showDeleteFields');
                    let name = '';

                    function check_conform() {
                        name = document.getElementById('conform-delete-field').value;
                        if (name == "{{ $file->name }}") {
                            d_btn.removeAttribute('disabled');
                        } else {
                            d_btn.setAttribute('disabled', 'disabled');
                        }
                    }

                    d_btn.addEventListener('click', async () => {

                        let res = await fetch(`{{ url('delete-file') }}`, {
                            method: 'POST',

                            body: JSON.stringify({
                                id: `{{ $file->id }}`,
                            }),
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                                "X-Requested-With": "XMLHttpRequest",
                                "X-CSRF-Token": `{{ csrf_token() }}`
                            },
                        });
                        let data = await res.json();

                        if (data.status == 200) {
                            window.location = '{{ url('delete-file-success') }}';
                        }else {
                            window.location = '{{ url('delete-failed') }}';

                        }
                    });

                    showDeleteField.addEventListener('click', () => {
                        if (showDeleteFields.classList.contains('hidden')) {
                            showDeleteFields.classList.remove('hidden');
                        } else {
                            showDeleteFields.classList.add('hidden');
                        }
                    });
                </script>
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
</div>
