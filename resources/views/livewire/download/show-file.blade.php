<div class="container p-4 mx-auto my-4 bg-white rounded-xl">
    <div class="filename">
        @foreach ($single_file as $file)
            @php
                $ext = explode('.', $file->name);
                $extension = $ext[count($ext) - 1];
            @endphp

            <div class="flex border-b xl:max-w-7xl">
                <h1 class="my-4 text-xl font-semibold text-gray-600">{{ $file->name }}</h1>
            </div>

            <div class="px-2 pb-4 mx-auto border-b">
                <h2 class="pb-4 mt-4 text-lg font-semibold text-gray-500 md:mt-6 lg:mt-8">File Info</h2>

                <div class="flex flex-wrap gap-1 md:flex-row xl:max-w-7xl ">
                    <div
                        class="flex items-center w-full px-4 rounded md:w-1/2 bg-gray-50 hover:cursor-pointer hover:shadow-sm h-14 hover:bg-gray-100">
                        <div class="font-semibold">Name:</div>&nbsp;{{ $file->name }}
                    </div>
                    @php
                        function formatBytes($size, $precision = 2)
                        {
                            $base = log($size, 1024);
                            $suffixes = ['', 'KB', 'MB', 'GB', 'TB'];

                            return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
                        }
                    @endphp

                    <div
                        class="flex items-center w-full px-4 rounded md:w-1/2 bg-gray-50 hover:cursor-pointer hover:shadow-sm h-14 hover:bg-gray-100">
                        <span
                            class="font-semibold">Size:</span>&nbsp;{{ formatBytes(filesize(public_path('AdonisJS full course 2022.mp4'))) }}
                    </div>

                    <div
                        class="flex items-center w-full px-4 rounded md:w-1/2 bg-gray-50 hover:cursor-pointer hover:shadow-sm h-14 hover:bg-gray-100">

                        <span class="font-semibold">Extension:</span>&nbsp;{{ $ext[count($ext) - 1] }}
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
