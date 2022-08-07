<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                <div class="mt-4 text-2xl">
                    You have Multiple Domains, Please Select One
                </div>
                <div class="mt-6 text-gray-500">
                    <div class="my-6">
                        <div class="mt-4 text-xl">
                            @foreach ($domains_list as $domain)
                            <div class="w-full p-4 my-4 space-x-2 border border-dashed rounded-lg md:w-1/2 form-group">
                                <input class="hover:cursor-pointer" id="{{$domain->name}}" name="domainID" type="radio" wire:model="domainID" value="{{$domain->id}}" required>
                                <label class="hover:cursor-pointer" for="{{$domain->name}}">{{$domain->name}}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

