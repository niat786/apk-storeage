@extends('layouts/downloads')
@section('content')
    <div class="container pt-4 pb-10 mx-auto my-5 bg-white rounded shadow-lg">

        <div class="flex justify-center py-5 title">
            <h1 class="text-2xl text-gray-600">Download {{ $f }}</h1>
        </div>
        <div class="flex flex-col items-center gap-5">
            <div class="p-10">
                <p class="text-centers"> There might be a link to download the document "<span
                        class="text-orange-600">{{ $f }}</span>". You can download the file by creating a
                    legitimate download link. <br>By doing these things, you can acquire the link.</p>

                <p>Generate a download link. It will generate a download link. This link will work for several hours.</p>
                <p>Proceed to the download page where you will get the file and save it to your device.</p>
                <p>Download the file for offline usage.</p>

            </div>

            <section class="w-full p-2">
                @livewire('ads.responsive')
            </section>


            <div class="flex items-center cursor-pointer downloadbtn button" id="d-btn">
                <svg xmlns="http://www.w3.org/2000/svg" id="spinner" width="16" height="16" fill="currentColor"
                    class="" viewBox="0 0 16 16">
                    <path
                        d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z" />
                </svg>
                <span id="d-btn2" class="mx-2 text-sm">Generate Download Link</span>
                <a id="d-btn3" href="{{ $url }}" class="flex items-center hidden mx-2 text-sm button-green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                        <path
                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z" />
                    </svg>&nbsp;Proceed to download</a>
                {{-- {{$url}} --}}
            </div>



        </div>

        <script>
            let dbtn = document.getElementById('d-btn');
            let dbtn2 = document.getElementById('d-btn2');
            let dbtn3 = document.getElementById('d-btn3');
            let spn = document.getElementById('spinner');

            dbtn.addEventListener('click', () => {
                dbtn2.innerText = `Generating ...`;
                spn.classList.add('animate-spin');

                setTimeout(() => {
                    spn.classList.add('hidden');
                    dbtn.classList.remove('button');
                    dbtn2.classList.add('hidden');
                    dbtn3.classList.remove('hidden');
                }, 500);
            });
        </script>

        <div class="flex gap-5">
            <div class="similar-item">

            </div>
        </div>

    </div>
@endsection
