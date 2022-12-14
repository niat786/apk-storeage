<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="upload-files-card">
            <div class="p-6 bg-white border-gray-200 dark:bg-gray-700 sm:px-20">
                <div class="mt-4 text-2xl">
                    Upload Your Files and Share With Anyone!
                </div>
                <div class="mt-6 text-gray-500">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        <li class="mr-2">
                            <span
                                class="inline-flex p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="w-4 h-4 mr-2 text-blue-600 dark:text-blue-500" viewBox="0 0 16 16">
                                    <path
                                        d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3zM2.19 3c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3H2.19zm9.608 5.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z" />
                                </svg>
                                Upload From Computer
                            </span>
                        </li>
                        <li class="mr-2">
                            <a href="{{ url('store/upload-online-file') }}"
                                class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group"
                                aria-current="page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor"
                                    class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5.525 3.025a3.5 3.5 0 0 1 4.95 0 .5.5 0 1 0 .707-.707 4.5 4.5 0 0 0-6.364 0 .5.5 0 0 0 .707.707Z" />
                                    <path
                                        d="M6.94 4.44a1.5 1.5 0 0 1 2.12 0 .5.5 0 0 0 .708-.708 2.5 2.5 0 0 0-3.536 0 .5.5 0 0 0 .707.707Z" />
                                    <path
                                        d="M2.974 2.342a.5.5 0 1 0-.948.316L3.806 8H1.5A1.5 1.5 0 0 0 0 9.5v2A1.5 1.5 0 0 0 1.5 13H2a.5.5 0 0 0 .5.5h2A.5.5 0 0 0 5 13h6a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5h.5a1.5 1.5 0 0 0 1.5-1.5v-2A1.5 1.5 0 0 0 14.5 8h-2.306l1.78-5.342a.5.5 0 1 0-.948-.316L11.14 8H4.86L2.974 2.342ZM2.5 11a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1Zm4.5-.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2.5.5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1Zm1.5-.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Z" />
                                    <path d="M8.5 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                                </svg>
                                Upload Using URL
                            </a>
                        </li>
                    </ul>

                    <div class="my-6">
                        <form wire:submit.prevent="save">
                            <h2 class="text-xl dark:text-gray-300">Select Files From Your Device</h2>
                            <div class="my-5 group">
                                <div class="w-full">
                                    {{-- <select wire:model="domainID" class="input-field">
                                        @forelse ($domains_list as $domain)
                                            <option value="{{ $domain->id }}">{{ $domain->name }}</option>
                                        @empty
                                        <option value="0">--select--</option>
                                        @endforelse
                                    </select> --}}

                                </div>

                                <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <input type="file" wire:model="file"
                                        class="mt-4 mb-6 file:hover:cursor-pointer file:px-3 file:text-sm file:border-0 file:py-2.5 focus:outline-0  file:bg-gray-400 file:text-white file:rounded-lg">
                                    <!-- Progress Bar -->
                                    <div x-show="isUploading">
                                        <progress class="rounded-full bg-gradient-to-r from-green-500 to-green-600"
                                            max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>

                                <div>
                                    @error('file')
                                        <span class="error-message">{{ $message }}</span>
                                    @enderror


                                    <button id="simple_btn" class="flex items-center button" type="submit">

                                        <span id="save_text">Save</span>

                                        <span id="spinner" class="items-center hidden">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="animate-spin" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                                                <path fill-rule="evenodd"
                                                    d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                                            </svg>&nbsp;Saving Your File...</span>

                                    </button>


                                    <script>
                                        let save_text = document.getElementById('save_text');

                                        let simplebtn = document.getElementById('simple_btn');
                                        let spinner = document.getElementById('spinner');

                                        simplebtn.addEventListener('click', () => {


                                            save_text.classList.add('hidden');
                                            spinner.classList.add('flex');
                                            spinner.classList.remove('hidden');
                                        });
                                    </script>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
