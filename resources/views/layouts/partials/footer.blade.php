<!-- Footer area start -->
<footer class="footer__area">
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="footer__widgets">
                        <div class="widget__one">
                            <img src="{{ asset('assets/imgs/logo/logo-purple.webp') }}" alt="Footer Logo"
                                class="footer__logo" width="150">
                            <p>APKEVE is a seamless solution for uploading, downloading, extracting, and converting
                                files with ease. With our
                                cloud storage account integrations, you can securely store and access your files
                                while creating shareable links at no extra
                                cost. Say goodbye to the hassle of managing multiple file transfer services and
                                hello to a fast and efficient solution
                                for all your file managements.</p>


                        </div>
                        <div class="footer__widget-two">
                            <h2 class="footer__widget-title">My Account</h2>
                            <ul class="footer__menu">
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Web Development</a></li>
                            </ul>
                        </div>
                        <div class="footer__widget-three">
                            <h2 class="footer__widget-title">Our Company</h2>
                            <ul class="footer__menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </div>
                        <div class="footer__widget-four">
                            <h2 class="footer__widget-title">Newsletter</h2>
                            <p>Stay up-to-date with the latest tips and tricks for optimizing your workflow. In
                                addition to
                                useful blog posts, we'll also keep you informed about new features, updates, and
                                special offers.</p>
                            <div class="newsletter">
                                <form action="#">
                                    <input type="text" placeholder="Enter your email">
                                    <button type="submit" class="submit">SUBSCRIBE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__btm">
        <p>© <span id="current_year"></span> — <a href="https://apkeve.com/">Apkeve.com</a>. All Rights
            Reserved.</p>
        <script>
            document.getElementById('current_year').innerText = new Date().getFullYear();
        </script>
    </div>
</footer>
<!-- Footer area end -->


<!-- All JS Files -->
<script src="{{ asset('homepage/assets/js/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('homepage/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('homepage/assets/js/counter.js') }}"></script>
<script src="{{ asset('homepage/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('homepage/assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('homepage/assets/js/progressbar.js') }}"></script>
<script src="{{ asset('homepage/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('homepage/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('homepage/assets/js/main.js') }}"></script>
