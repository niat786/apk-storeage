@extends('layouts.master')
@section('content')

<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                <div class="mt-4 text-2xl">
                    @if (session('upload-message'))
                        {{session('upload-message')}}
                    @endif
                </div>
                <div class="mt-6 text-gray-500">

                    <ul
                        class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        <li class="mr-2">
                            <a href="{{ url('upload') }}"
                                class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor"
                                    class="w-4 h-4 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3zM2.19 3c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3H2.19zm9.608 5.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z" />
                                </svg>
                                Upload New File
                            </a>
                        </li>

                        <li class="mr-2">
                            <a href="{{ url('my-files') }}"
                                class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"                                     class="w-4 h-4 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z"/>
                                  </svg>
                                View All Files
                            </a>
                        </li>


                    </ul>

                    <div class="my-6">
                        <div class="mt-4 text-xl">
                            @forelse ($uploaded_file as $file)
                                <div class="p-4 mx-4 border border-dashed rounded-lg ">
                                    <div class="container my-2">
                                        File Name: {{ $file->name }}
                                    </div>

                                    <div class="container my-2" x-data="{copied:0}">
                                        <p for="d-link"><span id="copy-message"  x-transition class="hidden w-full text-xs text-green-600">Link Copied!</span>
                                        </p>
                                        <div class="group">

                                            <input id="d-link" type="url" class="input-field"  value="{{ $file->download_link }}">
                                        </div>
                                        <div class="group">
                                            <button class="text-sm button" onclick="copyLink()">Copy Link</button>

                                        </div>
                                    </div>
                                    <script>
                                        let copyLink = () => {
                                            let field = document.getElementById('d-link');
                                            field.select();
                                            field.setSelectionRange(0, 99999);
                                            navigator.clipboard.writeText(field.value);
                                            document.getElementById('copy-message').classList.remove('hidden');
                                            setTimeout(() => {
                                            document.getElementById('copy-message').classList.add('hidden');
                                        }, 5000);
                                        }
                                    </script>
                                </div>
                            @empty
                               <div class="flex items-center justify-center p-10 mx-4 border border-dashed rounded-lg">
                                No File Details!
                               </div>
                            @endforelse
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
