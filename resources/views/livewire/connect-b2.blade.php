<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                <div class="mt-4 text-2xl">
                    Connect Your Backblaze Account
                </div>

                <div class="p-4 my-4 text-sm text-orange-500 bg-orange-100 border border-orange-200 rounded disclaimer">
                    <p>We do not share your account information, but we do advise you to link a free account with only
                        public content. You can add multiple accounts!</p>
                </div>


                @if (session('success'))
                    <div class="p-4 my-4 text-sm text-green-600 bg-green-100 border border-green-200 rounded ">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                <div class="flex">

                    <div class="mt-6 text-gray-500 lg:w-1/2">
                        @if (session('message'))
                            <ul>
                                <li class="w-4/5 p-2 my-2 rounded text-rose-500 bg-rose-200">{{ session('message') }}
                                </li>
                            </ul>
                        @endif

                        {{-- display errors --}}
                        @if ($errors->any())
                            <div class="">
                                <ul>

                                    @foreach ($errors->all() as $error)
                                        <li class="w-4/5 p-2 my-2 rounded text-rose-500 bg-rose-200">{{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- display errors end --}}

                        <form action="{{ url('connect-b2') }}" method="POST">
                            <a href="{{ url('find-b2-keys') }}" target="_blank"
                                class="px-2 font-mono text-indigo-500">How to Find Backblaze Keys?</a>

                            @csrf
                            <div class="p-2 form-group">
                                <div class="py-2 label">
                                <label>Select domain </label>
                                </div>

                                <select name="domain"  class="w-full p-2 border-gray-300 rounded focus:ring-0" required>
                                    @forelse ($domains as $index => $domain)
                                        <option value="{{ $domain->id }}">{{ $domain->name }}</option>
                                    @empty
                                        <option value="">--Select--</option>
                                    @endforelse

                                </select>

                            </div>
                            <div class="p-2 form-group">
                                <div class="py-2 label">
                                    <label for="key-id">Key ID</label>
                                </div>
                                <div class="input">
                                    <input name="keyID" value="{{ old('keyID') }}" type="text"
                                        class="w-full p-2 border-gray-300 rounded focus:ring-0" required>
                                </div>
                            </div>

                            <div class="p-2 form-group">
                                <div class="py-2 label">
                                    <label>Application Key</label>
                                </div>
                                <div class="input">
                                    <input name="ApplicationKey" value="{{ old('ApplicationKey') }}" type="text"
                                        class="w-full p-2 border-gray-300 rounded focus:ring-0" required>
                                </div>
                            </div>

                            <div class="p-2 form-group">
                                <div class="py-2 label">
                                    <label>Bucket ID</label>
                                </div>
                                <div class="input">
                                    <input name="BucketID" value="{{ old('BucketID') }}" type="text"
                                        class="w-full p-2 border-gray-300 rounded focus:ring-0" required>
                                </div>
                            </div>

                            <div class="p-2 form-group">
                                <div class="py-2 label">
                                    <label>Bucket Name</label>
                                </div>
                                <div class="input">
                                    <input name="BucketName" value="{{ old('BucketName') }}" type="text"
                                        class="w-full p-2 border-gray-300 rounded focus:ring-0" required>
                                </div>
                            </div>


                            <div class="p-2 form-group">
                                <button class="button" type="submit">
                                    Save
                                </button>
                            </div>

                        </form>
                    </div>

                    {{-- ads here --}}
                    {{-- <div class="p-2 mt-6 overflow-hidden text-gray-500 bg-gray-200 rounded-lg lg:w-1/2 google-ads">
                        <h2>Google add here</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti autem sit impedit omnis
                            dolor! Quo magni eum explicabo nihil nesciunt!</p>
                    </div> --}}
                    {{-- ads end --}}

                </div>
            </div>
        </div>
    </div>
</div>
