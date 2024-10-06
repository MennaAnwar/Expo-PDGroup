<!-- FOOTER -->
<footer class="pt-5 text-white footer bg-dark mt-3">
    <div class="container">
        <div class="mt-4 row">
            <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-between">
                <div class="d-flex justify-content-center flex-column align-items-center my-md-3">
                    @if (!request()->is('/'))
                        <span class="powered-by mb-2"> powered by </span>
                    @endif
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('build/assets/images/logo.svg') }}" alt="Logo" class="img-fluid">
                    </a>
                </div>
                <div class="follow-us">
                    <h6 class="mt-4">Follow Us</h6>
                    <div class="social-icons">
                        <a href="#"><img src="{{ asset('build/assets/images/icons/whatsapp.svg') }}" alt="WhatsApp" /></a>
                        <a href="#"><img src="{{ asset('build/assets/images/icons/instagram.svg') }}" alt="Instagram" /></a>
                        <a href="#"><img src="{{ asset('build/assets/images/icons/facebook.svg') }}" alt="Facebook" /></a>
                        <a href="#"><img src="{{ asset('build/assets/images/icons/tiktok.svg') }}" alt="TikTok" /></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex flex-column flex-lg-column justify-content-between">
                <div class="order-lg-1 order-sm-2">
                    <h6>Contact Us</h6>
                    <ul class="list-unstyled">
                        <li><i class='bx bx-phone'></i></i> 800 6121047</li>
                        <li><i class='bx bx-envelope' ></i> info@proprint.biz</li>
                        <li class="d-flex align-items-start">
                            <img src="{{ asset('build/assets/images/icons/location.svg') }}" alt="location" />
                            <span class="ms-2">Unit B2 & B3, Dresser Centre, Whitworth Street, Manchester M11 2NE</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6>Categories</h6>
                <ul class="list-unstyled">
                    <li>Print</li>
                    <li>Sign</li>
                    <li>Shopfitting</li>
                    <li>Cut</li>
                    <li>Expo</li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6>Supports</h6>
                <ul class="list-unstyled">
                    <li>About PDGroup</li>
                    <li>Privacy Policy</li>
                    <li>Help Centre</li>
                    <li>Contact Us</li>
                    <li>Terms & Conditions</li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6>Links</h6>
                <ul class="list-unstyled">
                    <li>PDPrint</li>
                    <li>PDSign</li>
                    <li>PDShopfitting</li>
                    <li>PDCut</li>
                    <li>PDExpo</li>
                </ul>
            </div>
        </div>
        <hr class="my-4 hr" />
        <div class="row">
            <div class="text-center col-12 d-flex justify-content-between">
                <p>&copy; 2024 PDGroup. All Rights Reserved.</p>
                <p>
                    <a href="#">Privacy Policy</a> |
                    <a href="#">Terms & Conditions</a> |
                    <a href="#">Sitemap</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
