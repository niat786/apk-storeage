<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.header')

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Scroll to top -->
    <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


    <!-- Header area start -->
    <header class="header__area" id="header__sticky">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="header__inner">
                        <div class="header__logo">
                            <img src="{{ asset('homepage/assets/imgs/logo/logo-purple.webp') }}" alt="Logo"
                                class="logo">
                            <img src="{{ asset('homepage/assets/imgs/logo/logo-purple.webp') }}" alt="Logo"
                                class="sticky-logo">
                        </div>
                        <div class="header__menu">
                            <div class="main-menu">
                                <ul>

                                    <li><a href="https://apkeve.com/login">
                                            <svg class="icon-light" xmlns="http://www.w3.org/2000/svg" width="17"
                                                height="17" viewBox="0 0 512 600">
                                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path class="path" fill="#fff"
                                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                                            </svg>

                                            <svg class="icon-dark" style="display:none;"
                                                xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 512 600">
                                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path class="path" fill="#000"
                                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                                            </svg>


                                            Login</a></li>

                                    <li><a href="https://apkeve.com/download-file/files"><svg class="icon-light"
                                                xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 512 600">
                                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path class="path" fill="#fff"
                                                    d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                            </svg>
                                            <svg class="icon-dark" style="display:none;"
                                                xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 512 600">
                                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path class="path" fill="#000"
                                                    d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                            </svg>
                                            Available Files</a></li>

                                    <li><a href="https://apkeve.com/upload-online-file">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                class="icon-light" viewBox="0 0 640 600">
                                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path class="path" fill="#fff"
                                                    d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z" />
                                            </svg>

                                            <svg class="icon-dark" style="display:none;"
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 640 600">
                                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path class="path" fill="#000"
                                                    d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z" />
                                            </svg>



                                            Upload Files</a></li>
                                </ul>
                            </div>
                            <script>
                                let svgIcons_dark = document.querySelectorAll('.icon-dark');
                                let svgIcons_light = document.querySelectorAll('.icon-light');

                                // Listen for the scroll event
                                window.addEventListener('scroll', function() {
                                    // Get the current scroll position
                                    var scrollPosition = window.pageYOffset || document.documentElement.scrollTop || document.body
                                        .scrollTop || 0;

                                    // Check if the page is scrolled down
                                    if (scrollPosition > 0) {
                                        // Add the 'scrolled' class to the body element
                                        document.body.classList.add('scrolled');
                                        svgIcons_light.forEach(icon => {
                                            icon.style.display = 'none';

                                        });
                                        svgIcons_dark.forEach(icon => {
                                            icon.style.display = 'inline';

                                        });
                                    } else {
                                        // Remove the 'scrolled' class from the body element
                                        document.body.classList.remove('scrolled');
                                        svgIcons_light.forEach(icon => {
                                            icon.style.display = 'inline';

                                        });
                                        svgIcons_dark.forEach(icon => {
                                            icon.style.display = 'none';

                                        });
                                    }
                                });
                            </script>
                        </div>
                        <div class="header__others">
                            <button class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <button class="search-close"><i class="fa-solid fa-xmark"></i></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    <div class="header__search">
        <form action="#">
            <input type="text" name="s" placeholder="Search...">
        </form>
    </div>


    <!-- Hero area start -->
    <section class="hero__area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="hero__content">
                        <h2 class="hero__title cxufadeUp2">Simplify<br> <span>File Sharing</span></h2>
                        <p class="cxufadeUp3">Simplify Cloud File Sharing with Ease, Effortlessly
                            Upload and Share Your Files!</p>
                        <a href="https://apkeve.com/upload-online-file" class="cxu-btn-primary cxufadeUp4">Upload
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('homepage/assets/imgs/hero/overlay.png') }}" alt="overlay" class="overlay">

    </section>
    <!-- Hero area end -->

    <!-- Brand area start -->
    <div class="brand__area dark">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="brand__list">
                        <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.15s">
                            <img src="{{ asset('homepage/assets/imgs/home/logos/sun-pdf.png') }}" alt="Brand Logo"
                                style="max-width:150px;max-height: 50px;">
                        </div>
                        <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                            <img src="{{ asset('homepage/assets/imgs/home/logos/up-rialer.png') }}" alt="Brand Logo"
                                style="max-width:150px;max-height: 50px;">
                        </div>
                        <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.45s">
                            <img src="{{ asset('homepage/assets/imgs/home/logos/megia.png') }}" alt="Brand Logo"
                                style="max-width:150px;max-height: 50px;">
                        </div>
                        <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                            <img src="{{ asset('homepage/assets/imgs/home/logos/o-gallery.png') }}" alt="Brand Logo"
                                style="max-width:150px;max-height: 50px;">
                        </div>
                        <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.75s">
                            <img src="{{ asset('homepage/assets/imgs/home/logos/rocket.png') }}" alt="Brand Logo"
                                style="max-width:150px;max-height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand area end -->

    <!-- About area start -->
    <section class="about__area dark pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="about__left">
                        <img src="{{ asset('homepage/assets/imgs/about/1.png') }}" alt="Image" class="image">
                        <img src="{{ asset('homepage/assets/imgs/about/2.png') }}" alt="Image" class="image-2">
                        <img src="{{ asset('homepage/assets/imgs/about/3.jpg') }}" alt="Image" class="image-3">
                        <img src="{{ asset('homepage/assets/imgs/about/s1.png') }}" alt="shape" class="shape">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="about__right">
                        <div class="about__right-inner">
                            <h2 class="sec-sub-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                                Public Files Sharing</h2>
                            <h3 class="sec-title wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">9000+
                                Files
                                <span>Shared Daily</span>
                            </h3>
                            <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">File sharing
                                service allows you to easily share and access free and public files over the internet.
                                With over 2500+
                                files being
                                shared daily, it is evident that our service is a popular choice among users. Whether
                                you need to share documents,
                                images, audio, or video files, our service provides a convenient and reliable solution.
                            </p>
                            <ul class="list-check wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                                <li>PDF Files</li>
                                <li>Documents</li>
                                <li>Software Files</li>
                                <li>Videos</li>
                            </ul>
                            <a href="#our-service-features"
                                class="cxu-btn-primary wow animate__animated animate__fadeInUp"
                                data-wow-delay="0.4s">READ
                                MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area end -->


    <!-- Service area start -->
    <section class="service__area dark" id="our-service-features">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="sec-title-wrap">
                        <h2 class="sec-sub-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Our
                            Best
                            Service
                        </h2>
                        <h3 class="sec-title wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">WHAT
                            Services WE’RE <br>
                            <span>OFFERING.</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="service__item wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            <div class="service__left">
                                <div class="icon">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="33.878" height="33.878"
                                        viewBox="0 0 640 512">

                                        <path fill="#fff"
                                            d="M535 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l64 64c4.5 4.5 7 10.6 7 17s-2.5 12.5-7 17l-64 64c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l23-23L384 112c-13.3 0-24-10.7-24-24s10.7-24 24-24l174.1 0L535 41zM105 377l-23 23L256 400c13.3 0 24 10.7 24 24s-10.7 24-24 24L81.9 448l23 23c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L7 441c-4.5-4.5-7-10.6-7-17s2.5-12.5 7-17l64-64c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM96 64H337.9c-3.7 7.2-5.9 15.3-5.9 24c0 28.7 23.3 52 52 52l117.4 0c-4 17 .6 35.5 13.8 48.8c20.3 20.3 53.2 20.3 73.5 0L608 169.5V384c0 35.3-28.7 64-64 64H302.1c3.7-7.2 5.9-15.3 5.9-24c0-28.7-23.3-52-52-52l-117.4 0c4-17-.6-35.5-13.8-48.8c-20.3-20.3-53.2-20.3-73.5 0L32 342.5V128c0-35.3 28.7-64 64-64zm64 64H96v64c35.3 0 64-28.7 64-64zM544 320c-35.3 0-64 28.7-64 64h64V320zM320 352a96 96 0 1 0 0-192 96 96 0 1 0 0 192z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="service__right">
                                <h3 class="service__title">Fast <br>
                                    File Transfers</h3>
                                <p>Allows you to effortlessly transfer large files directly to your account. You no
                                    longer
                                    need to worry about slow internet speeds or the hassle of downloading and
                                    re-uploading files to multiple storage
                                    providers. Our streamlined process provides a convenient and efficient solution for
                                    transferring files of any size.
                                </p>
                            </div>
                        </div>
                        <div class="service__serial wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                            <span>01</span>
                        </div>
                    </a>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="service__item wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                            <div class="service__left">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33.878" height="33.878"
                                        viewBox="0 0 640 512">
                                        <path fill="#fff"
                                            d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="service__right">
                                <h3 class="service__title">Upload <br> Large Files</h3>
                                <p>With no file size limits, you can upload even the largest
                                    files such as high-resolution videos, large software packages, or large datasets.
                                    Our robust infrastructure ensures that
                                    the upload process is fast and reliable, providing a hassle-free experience.
                                </p>
                            </div>
                        </div>
                        <div class="service__serial wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                            <span>02</span>
                        </div>
                    </a>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="service__item wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                            <div class="service__left">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33.878" height="33.878"
                                        viewBox="0 0 448 512">
                                        <path fill="#fff"
                                            d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="service__right">
                                <h3 class="service__title">Connect <br> Cloud Storage</h3>
                                <p>Upload, access and manage files from multiple cloud storage providers in one central
                                    location. This simplifies file management
                                    and eliminates the need to switch between multiple applications or services.
                                </p>
                            </div>
                        </div>
                        <div class="service__serial wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                            <span>03</span>
                        </div>
                    </a>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="service__item wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                            <div class="service__left">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="33.878"
                                        height="33.878">
                                        <path fill="#fff"
                                            d="M360.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="service__right">
                                <h3 class="service__title">Generate <br> Readable download links</h3>
                                <p>Generate readable download links for files. These links are easy to share and provide
                                    a direct download in your website. This feature is particularly useful for sharing
                                    your digital product online.
                                </p>
                            </div>
                        </div>
                        <div class="service__serial wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                            <span>04</span>
                        </div>
                    </a>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="service__item wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                            <div class="service__left">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="33.878"
                                        height="33.878">
                                        <path fill="#fff"
                                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm320 96c0-26.9-16.5-49.9-40-59.3V88c0-13.3-10.7-24-24-24s-24 10.7-24 24V292.7c-23.5 9.5-40 32.5-40 59.3c0 35.3 28.7 64 64 64s64-28.7 64-64zM144 176a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm-16 80a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM400 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="service__right">
                                <h3 class="service__title">Saves <br> your bandwidth</h3>
                                <p>With our public store, you no longer have to worry about running out of storage
                                    space. A secure and
                                    reliable platform to upload and share your files with ease. Say goodbye to the
                                    hassle of managing limited storage and
                                    hello to a more efficient way of sharing your files.
                                </p>
                            </div>
                        </div>
                        <div class="service__serial wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                            <span>05</span>
                        </div>
                    </a>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="service__item wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
                            <div class="service__left">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="33.878"
                                        height="33.878">
                                        <path fill="#fff"
                                            d="M64 32C64 14.3 49.7 0 32 0S0 14.3 0 32v96V384c0 35.3 28.7 64 64 64H256V384H64V160H256V96H64V32zM288 192c0 17.7 14.3 32 32 32H544c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32H445.3c-8.5 0-16.6-3.4-22.6-9.4L409.4 9.4c-6-6-14.1-9.4-22.6-9.4H320c-17.7 0-32 14.3-32 32V192zm0 288c0 17.7 14.3 32 32 32H544c17.7 0 32-14.3 32-32V352c0-17.7-14.3-32-32-32H445.3c-8.5 0-16.6-3.4-22.6-9.4l-13.3-13.3c-6-6-14.1-9.4-22.6-9.4H320c-17.7 0-32 14.3-32 32V480z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="service__right">
                                <h3 class="service__title">Easy <br>File management</h3>
                                <p>Stay in control of your files and make necessary adjustments with ease. Our platform
                                    allows you to conveniently track,
                                    modify, and remove files as needed. Whether you need to update a document or remove
                                    an outdated file, our service
                                    provides a user-friendly solution for managing your files.
                                </p>
                            </div>
                        </div>
                        <div class="service__serial wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                            <span>06</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- Service area end -->


    <!-- Counter area start -->
    <section class="counter__area dark">
        <div class="container">
            <div class="counter__inner">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                        <div class="counter__item wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            <div class="counter-active counter__number">10K+</div>
                            <h3 class="counter__text">HAPPY <br> USERS</h3>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                        <div class="counter__item wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                            <div class="counter-active counter__number">11K+</div>
                            <h3 class="counter__text">Websites <br> EMPOWERED</h3>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                        <div class="counter__item wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                            <div class="counter-active counter__number">270K+</div>
                            <h3 class="counter__text">LINKS <br>GENERATED</h3>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                        <div class="counter__item wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
                            <div class="counter-active counter__number">12K+</div>
                            <h3 class="counter__text">PUBLIC <br>FILES UPLOADED</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter area end -->


    <!-- Testimonial area start -->
    <section class="testimonial__area dark pt-130 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="sec-title-wrap">
                        <h2 class="sec-sub-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            Testimonials</h2>
                        <h3 class="sec-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Users's
                            Awesome <br>
                            <span>Feedback.</span>
                        </h3>
                    </div>
                    <div class="testimonial__slider-wrap">
                        <div class="swiper testimonial__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__slide">
                                        <img src="{{ asset('homepage/assets/imgs/home/users/NA.webp') }}"
                                            alt="Client" class="wow animate__animated animate__fadeInUp"
                                            data-wow-delay="0.3s">
                                        <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">I've
                                            been using this file sharing and storage service for a few months now and
                                            I'm blown away by how easy it is to use.
                                            Uploading and sharing files with my team is seamless, and the storage
                                            options are great for keeping everything
                                            organized. Plus, the download speeds are lightning-fast. I highly recommend
                                            this service!</p>
                                        <h4 class="testimonial__name wow animate__animated animate__fadeInUp"
                                            data-wow-delay="0.7s">Jennifer Rodriguez</h4>
                                        <h5 class="testimonial__role wow animate__animated animate__fadeInUp"
                                            data-wow-delay="0.9s">
                                            Photographer</h5>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__slide">
                                        <img src="{{ asset('homepage/assets/imgs/testimonial/2.jpg') }}"
                                            alt="Client" class="wow animate__animated animate__fadeInUp"
                                            data-wow-delay="0.3s">
                                        <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">As a
                                            blogger who frequently works on my website, the file storage and sharing
                                            service I've been using has completely
                                            transformed my workflow. It's incredibly convenient to be able to upload and
                                            share all of my files directly on my site.
                                            One feature that I particularly appreciate is the ability to generate
                                            download links for my domain. This allows visitors
                                            to download files directly from my site without being redirected anywhere
                                            else. It's a seamless experience for everyone
                                            involved and has really elevated the user experience on my website.</p>
                                        <h4 class="testimonial__name wow animate__animated animate__fadeInUp"
                                            data-wow-delay="0.7s">Sarah Johnson</h4>
                                        <h5 class="testimonial__role wow animate__animated animate__fadeInUp"
                                            data-wow-delay="0.9s">Blogger</h5>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__slide">
                                        <img src="{{ asset('homepage/assets/imgs/testimonial/3.jpg') }}"
                                            alt="Client" class="wow animate__animated animate__fadeInUp"
                                            data-wow-delay="0.3s">
                                        <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">I
                                            can't
                                            say enough good things about this file sharing and storage service. It's
                                            helped me streamline my business
                                            operations and keep all of my files organized in one place. The upload and
                                            download speeds are impressive, and the
                                            intuitive interface makes it easy to find what I'm looking for. Definitely
                                            recommend giving it a try!</p>
                                        <h4 class="testimonial__name wow animate__animated animate__fadeInUp"
                                            data-wow-delay="0.7s">Michael Davis</h4>
                                        <h5 class="testimonial__role wow animate__animated animate__fadeInUp"
                                            data-wow-delay="0.9s">
                                            Marketing Manager</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-pagination wow animate__animated animate__fadeInUp"
                                data-wow-delay="0.8s"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial area end -->


    <!-- Modal -->
    <div class="modal fade dark modal__wkprocess" id="workProcessModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/CH50zuS8DD0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>




    <!-- Price area start -->
    <section class="package__area dark pb-130 pt-130">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="sec-title-wrap">
                        <h2 class="sec-sub-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            Pricing
                            Plans</h2>
                        <h3 class="sec-title wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">We Made
                            The
                            Plans <br>
                            <span>For You.</span>
                        </h3>
                    </div>
                    <div class="package__duration wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                        <div class="monthly">
                            <p>MONTHLY</p>
                        </div>
                        <div class="pkg-btn">
                            <input type="checkbox" name="package" class="price-type">
                        </div>
                        <div class="yearly">
                            <p>YEARLY</p>
                        </div>
                    </div>
                    <div class="package__list">
                        <div class="package__type starter wow animate__animated animate__fadeInUp"
                            data-wow-delay="0.2s">
                            <div class="package__top">
                                <div class="package__title-wrap">
                                    <h4 class="package__title">Starter</h4>
                                    <h5 class="package__sub-title">Monthly Package</h5>
                                </div>
                                <div class="package__price">
                                    $<span class="monthly_price">0</span><span class="yearly_price">0</span>
                                </div>
                            </div>
                            <div class="package__feature">
                                <ul>
                                    <li>Upload to public store</li>
                                    <li>High Speed Downloads</li>
                                    <li>Connect your cloud storage account</li>
                                    <li class="disabled">Generate 1000+ per/month Links</li>
                                    <li class="disabled">Large Files Uploading</li>
                                    <li class="disabled">Multiple cloud storages</li>
                                </ul>
                                <a href="#" class="plan-2">Choose Plan</a>
                            </div>
                        </div>
                        <div class="package__type standard wow animate__animated animate__fadeInUp"
                            data-wow-delay="0.4s">
                            <div class="package__top">
                                <div class="package__title-wrap">
                                    <h4 class="package__title">standard</h4>
                                    <h5 class="package__sub-title">Monthly Package</h5>
                                </div>
                                <div class="package__price">$<span class="monthly_price">9</span><span
                                        class="yearly_price">99</span>
                                </div>
                            </div>
                            <div class="package__feature">
                                <ul>
                                    <li>Upload to public store</li>
                                    <li>High Speed Downloads</li>
                                    <li>Connect your cloud storage account</li>
                                    <li>Generate 1000+ per/month Links</li>
                                    <li>Large Files Uploading</li>
                                    <li class="disabled">Multiple cloud storages</li>
                                </ul>
                                <a href="#" class="plan">Coming Soon</a>
                            </div>
                        </div>
                        <div class="package__type premium wow animate__animated animate__fadeInUp"
                            data-wow-delay="0.6s">
                            <div class="package__top">
                                <div class="package__title-wrap">
                                    <h4 class="package__title">premium</h4>
                                    <h5 class="package__sub-title">Monthly Package</h5>
                                </div>
                                <div class="package__price">$<span class="monthly_price">19</span><span
                                        class="yearly_price">210</span>
                                </div>
                            </div>
                            <div class="package__feature">
                                <ul>
                                    <li>Upload to public store</li>
                                    <li>High Speed Downloads</li>
                                    <li>Connect your cloud storage account</li>
                                    <li>Generate 1000+ per/month Links</li>
                                    <li>Large Files Uploading</li>
                                    <li>Multiple cloud storages</li>
                                </ul>
                                <a href="#" class="plan-2">Coming Soon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Price area end -->



    <!-- Blog area start -->
    <section class="blog__area dark pt-125 pb-125">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="sec-title-wrap">
                        <h2 class="sec-sub-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Our
                            Blog
                        </h2>
                        <h3 class="sec-title wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">Our Recent
                            <span>Posts.</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="blog__item wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <a href="blog-details.html"><img src="{{ asset('homepage/assets/imgs/blog/14.png') }}"
                                alt="Blog Image"></a>
                        <div class="blog__content">
                            <div class="date">22 JAN 2020</div>
                            <a href="blog-details.html">
                                <h2 class="blog__title">How to Increase Business Through SEM</h2>
                            </a>
                            <p>We are passionate about our works. Our designers ahead of the curve.</p>
                            <a href="blog-details.html" class="link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="blog__item wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <a href="blog-details.html"><img src="{{ asset('homepage/assets/imgs/blog/2.png') }}"
                                alt="Blog Image"></a>
                        <div class="blog__content">
                            <div class="date">22 JAN 2020</div>
                            <a href="blog-details.html">
                                <h2 class="blog__title">How to Increase Business Through SEM</h2>
                            </a>
                            <p>We are passionate about our works. Our designers ahead of the curve.</p>
                            <a href="blog-details.html" class="link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="blog__item wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                        <a href="blog-details.html"><img src="{{ asset('homepage/assets/imgs/blog/3.png') }}"
                                alt="Blog Image"></a>
                        <div class="blog__content">
                            <div class="date">22 JAN 2020</div>
                            <a href="blog-details.html">
                                <h2 class="blog__title">How to Increase Business Through SEM</h2>
                            </a>
                            <p>We are passionate about our works. Our designers ahead of the curve.</p>
                            <a href="blog-details.html" class="link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog area end -->


    @include('layouts.partials.footer')

</body>

</html>
