<div class="p-6 bg-white border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700 sm:px-20">
    <!-- <div>
        <x-jet-application-logo class="block w-auto h-12" />
    </div> -->

    <div class="mt-4 text-2xl font-bold ">
        <span class="text-transparent dark:bg-white bg-clip-text bg-gradient-to-r from-pink-600 to-violet-600">
            Welcome, {{auth()->user()->name}}
        </span>
    </div>

    <div class="mt-6 text-gray-500 dark:text-gray-300">

        Our service enables you to upload your files and generate downloadable links. You can use this link to share the file with anyone you want.
    </div>
</div>

<div class="grid grid-cols-1 bg-gray-200 bg-opacity-25 md:grid-cols-2 dark:bg-gray-700">
 <div class="p-6 ">

        <div class="flex items-center">

            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="w-6 h-6 text-gray-500 dark:text-gray-300" viewBox="0 0 16 16">
                <path
                    d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z" />
            </svg>&nbsp;

            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300">
                 Upload Files and Generate Download Link
            </div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">

                Generate a download link or a shareable link after uploading your file. Share the URL on social media
                platforms like Facebook, Twitter, LinkedIn, and others.
                <p class="my-4"><a href="{{ url('upload') }}" class='button'>Upload Files</a></p>


            </div>


        </div>
    </div>


    <div class="p-6 border-t border-gray-200 dark:border-gray-600 md:border-t-0 md:border-l">
        <div class="flex items-center">

            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="w-6 h-6 text-gray-500 dark:text-gray-300" viewBox="0 0 16 16">
                <path
                    d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
            </svg>&nbsp;
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300">
            ConnectYour Backblaze account</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">

                If you have a file downloading website then you can upload files from our service to Backblaze. You will
                get downloadable link as a subdomain of your wesite.
                <p class="my-4"><a href="{{ url('connect-b2') }}" class='button'>Connect</a></p>

            </div>


        </div>
    </div>

    <div class="p-6 border-t border-gray-200 dark:border-gray-600 ">
        <div class="flex items-center">


            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="w-6 h-6 text-gray-500 dark:text-gray-300" viewBox="0 0 16 16">
                <path d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3zM2.19 3c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3H2.19zm9.608 5.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z"/>
              </svg>

            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300">
                Files Store
            </div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">

                We have a huge selection of publically accessible files including APKs, PDFs, and txt files. Look
                through our collection of files to find links for sharing and downloading.
                <p class="my-4"><a href="{{ url('my-files') }}" class='button'>View Files</a></p>

            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 dark:border-gray-600 md:border-l">
        <div class="flex items-center">

            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="w-6 h-6 text-gray-500 dark:text-gray-300" viewBox="0 0 16 16">
                <path
                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
            </svg>
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300">
                Tutorials

            </div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">

                Get the necessary information on the topics related to our service, step-by-step tutorials. As an
                example, how can I upload a file? How do I link my Backblaze accounts? or how to obtain shareable and
                download links.
                <p class="my-4"><a href="{{ url('tutorials') }}" class='button'>Learn More</a></p>

            </div>
        </div>
    </div>
</div>
