<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div class="mt-4 text-2xl">
                        Add New Bucket
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
                                            <li class="w-4/5 p-2 my-2 rounded text-rose-500 bg-rose-200">
                                                {{ $error }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{-- display errors end --}}

                            <form wire:submit.prevent="save">

                                <div class="p-2 form-group">
                                    <div class="py-2 label">
                                    <label>Select domain </label>
                                    </div>

                                    <select wire:model="domainID" class="w-full p-2 border-gray-300 rounded focus:ring-0">
                                        @forelse ($domains as $domain)
                                            <option value="{{ $domain->id }}">{{ $domain->name }}</option>
                                        @empty
                                            <option value="0">--Select--</option>
                                        @endforelse

                                    </select>

                                </div>


                                <div class="p-2 form-group">
                                    <div class="py-2 label">
                                        <label>Bucket ID</label>
                                    </div>
                                    <div class="input">
                                        <input wire:model="bucketID" name="bucketID" value="{{ old('bucketID') }}" type="text"
                                            class="w-full p-2 border-gray-300 rounded focus:ring-0">
                                    </div>
                                </div>

                                <div class="p-2 form-group">
                                    <div class="py-2 label">
                                        <label>Bucket Name</label>
                                    </div>
                                    <div class="input">
                                        <input wire:model="bucket_name" name="bucket_name" value="{{ old('bucket_name') }}" type="text"
                                            class="w-full p-2 border-gray-300 rounded focus:ring-0">
                                    </div>
                                </div>

                                <div class="p-2 form-group">
                                    <div class="py-2 label">
                                        <label for="key-id">Key ID</label>
                                    </div>
                                    <div class="input">
                                        <input name="keyID" value="{{ old('keyID') }}" type="text"
                                            class="w-full p-2 border-gray-300 rounded focus:ring-0">
                                    </div>
                                </div>

                                <div class="p-2 form-group">
                                    <div class="py-2 label">
                                        <label>Application Key</label>
                                    </div>
                                    <div class="input">
                                        <input name="ApplicationKey" value="{{ old('ApplicationKey') }}" type="text"
                                            class="w-full p-2 border-gray-300 rounded focus:ring-0">
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

</div>
