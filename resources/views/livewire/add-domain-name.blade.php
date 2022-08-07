<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                <div class="mt-4 text-2xl">
                    Domain Names

                </div>

                <div class="mt-6 text-gray-500">
                    @if (session('message'))
                        <span class="w-4/5 p-2 my-2 rounded text-rose-500 bg-rose-200">{{ session('message') }}</span>
                    @endif

                    <div class="my-6">

                        <form action="{{ route('add-domain-name') }}" method="POST">
                            @csrf
                            <h2 class="text-xl">Add Your Domain Name</h2>
                            <div class="my-5 group">
                                <label for="domain-name">Domain Name</label>
                                <input type="text" oninput="domain_added()" onchange="domain_added()"
                                    onblur="sub_domain_added()" id="field-domain-name" x-on:click="showDomain = true"
                                    placeholder="example.com" class="input-field" name="domain">
                                <p id="domain_error" class="hidden my-2 text-sm text-rose-600">Please Add Valid Domain
                                    Name</p>
                            </div>
                            <div class="my-5 group">

                                <label for="domain-name">Sub Domain</label>
                                <input type="text" oninput="sub_domain_added()" onchange="sub_domain_added()"
                                    onblur="sub_domain_added()" id="field-subdomain" placeholder="download.example.com"
                                    class="input-field" name="sub_domain">


                            </div>

                            @error('domain')
                                <span class="my-4 error text-rose-600">{{ $message }}</span>
                            @enderror


                            <p id="set_subdomain" class="my-3 text-sm text-green-600"></p>

                            <div>
                                <button class="button" type="submit">Save</button>
                            </div>

                        </form>
                        <script>
                            var MainDomainValue;
                            var SubDomainValue;


                            function domain_added() {
                                let http = new RegExp('http://');
                                var https = new RegExp('https://');
                                var _www = new RegExp('www.');

                                let domain = document.getElementById('field-domain-name').value;
                                if (domain.match(http) || domain.match(https)) {
                                    MainDomainValue = domain.split('//')[1].split('/')[0];
                                    console.log(MainDomainValue);
                                    if (MainDomainValue.match(_www)) {
                                        MainDomainValue = MainDomainValue.split('www.')[1];
                                    }
                                } else {
                                    MainDomainValue = domain;
                                }
                                document.getElementById('field-domain-name').value = MainDomainValue;

                                // valid domain
                                let errormessage = document.getElementById('domain_error');

                                if (!/^[a-zA-Z0-9][a-zA-Z0-9-]{1,61}[a-zA-Z0-9](?:\.[a-zA-Z]{2,})+$/.test(MainDomainValue) && !
                                    MainDomainValue == '') {
                                    errormessage.classList.remove('hidden')
                                } else {
                                    errormessage.classList.add('hidden')
                                }

                            }

                            function sub_domain_added() {
                                let subdomain = document.getElementById('field-subdomain').value;
                                let domain = document.getElementById('field-domain-name').value;

                                SubDomainValue = `${subdomain}.${MainDomainValue}`;
                                if (!subdomain == '' && !domain == '') {
                                    document.getElementById('set_subdomain').innerText = SubDomainValue;
                                } else {
                                    document.getElementById('set_subdomain').innerText = '';
                                    document.getElementById('field-domain-name').innerText = '';
                                }

                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
