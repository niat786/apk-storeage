@extends('layouts/downloads')
@section('content')

    @php
        $the_session = $session ?? '0';
    @endphp
    @if ($the_session)
        <div class="container p-10 mx-auto my-5 bg-white rounded shadow-lg">
            <div class="flex justify-center py-5 title">
                <h1 class="text-2xl text-gray-600">Download {{ $f }}</h1>
            </div>
            <div class="flex flex-col items-center gap-5">
                <p>The session of this page is expired please refresh now</p>
                <div class="downloadbtn">

                    <a class="text-sm button-orange" href="{{ url('download-file/files', ['u' => $u, 'f' => $f]) }}">Refresh
                        the
                        page</a>
                </div>
            </div>

            <div class="flex gap-5">
                <div class="similar-item">

                </div>
            </div>

        </div>
    @else
        <div class="container p-10 mx-auto my-5 bg-white rounded shadow-lg">
            @if (session('notfound'))
                <div class="p-4 text-rose-600 bg-rose-100">
                    {{ session('notfound') }}
                </div>
            @endif
            <div class="flex flex-col items-center justify-center title">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="text-indigo-500 bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z" />
                    </svg>

                </div>
                <div>
                    <h1 class="my-4 text-2xl text-center text-orange-600"> {{ $f }} is ready to download</h1>

                </div>

            </div>
            <div class="flex flex-col items-center gap-5">
                <p>You have successfully generated a download link for this file. This link is valid for several hours.</p>
                <p>The file is now ready to download. You can get it from the download link below.</p>
                <div class="flex downloadbtn" id="dbtn">

                    <button class="flex items-center text-sm cursor-pointer button" id="dbtn-span">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z" />
                        </svg>&nbsp;Download File</button>
                    {{-- <a class="button" href="{{ url('download', [$u, $f]) }}">Download File Now</a> --}}
                </div>
                <div class="">
                    <div class="hidden p-4 text-2xl text-gray-600" id="d-heading">
                        Downloading will start in <span id="timer"></span> seconds.
                    </div>
                    <span id="link" class="hidden">Still Not downloading? <a
                            href="{{ url('download-file', [$u, $f]) }}" class="text-green-700">Click here </a> to download
                        manually</span>
                </div>
            </div>
            <script>
                let dbtn = document.getElementById('dbtn');
                let sec = document.getElementById('timer');
                let lnk = document.getElementById('link');
                let dheading = document.getElementById('d-heading');
                let dbtnspan = document.getElementById('dbtn-span');
                let countdown_time = 1;
                dbtn.addEventListener('click', () => {
                    window.location.href = "{{ url('download-file', [$u, $f]) }}";
                    return;

                    // 
                    if (countdown_time < 20 && countdown_time > 0) {
                        return 0;
                    }
                    countdown_time = 1
                    dheading.classList.remove('hidden');

                    let interval = setInterval(function() {
                        countdown_time--;
                        document.getElementById("timer").innerText = countdown_time;
                        if (countdown_time <= 0) {
                            lnk.classList.remove('hidden');
                            clearInterval(interval);
                            // return 0;
                            window.location.href = "{{ url('download-file', [$u, $f]) }}";
                        }
                    }, 1200);

                });
            </script>



            <div class="flex gap-5">
                <div class="similar-item">

                </div>
            </div>

        </div>
    @endif
@endsection
