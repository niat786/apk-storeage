<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                <div class="mt-4 text-2xl">
                    You have Multiple Backblaze accounts, Please Select One
                </div>
                <div class="mt-6 text-gray-500">
                    <div class="my-6">
                        <div class="mt-4 text-xl">
                            @foreach ($B2Accounts as $account)
                                <div
                                    class="w-full p-4 my-4 space-x-2 border border-dashed rounded-lg md:w-1/2 form-group">
                                    <input class="hover:cursor-pointer" id="{{ $account->bucket_name }}"
                                        name="domain_name" type="radio" value="{{ $account->id }}"
                                        wire:model="B2AccountID" required>
                                    <label class="hover:cursor-pointer"
                                        for="{{ $account->bucket_name }}">{{ $account->bucket_name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
