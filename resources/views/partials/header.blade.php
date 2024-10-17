<!-- HEADER-->
<header class="header">
    <div class="overlay"></div>

    <!-- MAIN HEADER -->
    <div class="main-header">
        <div class="container py-4">
            <div class="row d-flex align-items-center">
                <div class="col-4 d-flex align-items-center">
                    <button type="button" id="sidebarCollapse" class="btn d-sm-block d-lg-none">
                        <i class="bx bx-menu icon-single"></i>
                    </button>
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('build/assets/images/icons/PD.svg') }}" alt="EXPO" class="header-logo">
                            <p class="bold">EXPO</p>
                    </a>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="social-icons">
                        <a href="#"><img src="{{ asset('build/assets/images/icons/instagram.svg') }}" alt="Instagram" /></a>
                        <a href="#"><img src="{{ asset('build/assets/images/icons/facebook.svg') }}" alt="Facebook" /></a>
                        <a href="#"><img src="{{ asset('build/assets/images/icons/tiktok.svg') }}" alt="TikTok" /></a>
                        <a href="#"><img src="{{ asset('build/assets/images/icons/youtube.svg') }}" alt="Youtube" /></a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex justify-content-end align-items-center fs-3">
                        <i class='bx bx-phone mx-2'></i>
                        <span class="contact-info"> 00 44 800 6121 047</span>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!-- END MAIN HEADER -->

    <!-- NAVBAR -->
    <nav class="container navbar d-lg-flex d-none justify-content-end">
        <ul class="d-flex align-items-center my-2 category">
            <x-nav-links/>
        </ul>
    </nav>
    <!-- END NAVBAR -->

    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="pl-0 col-11">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ asset('build/assets/images/logo.svg') }}" alt="logo" />
                        </a>
                    </div>

                    <div class="text-left col-1">
                        <button type="button" id="sidebarCollapseX" class="btn btn-link">
                            <i class="bx bx-x icon-single"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-content">

            <ul class="mb-3 list-unstyled components">
                <x-nav-links/>
            </ul>

            <h5 class="title">Follow Us</h5>

            <ul class="social-icons">
                <li>
                    <a href="#"><img src="{{ asset('build/assets/images/icons/instagram.svg') }}" alt="Instagram" /></a>
                </li>
                <li>
                    <a href="#"><img src="{{ asset('build/assets/images/icons/facebook.svg') }}" alt="Facebook" /></a>
                </li>
                <li>
                    <a href="#"><img src="{{ asset('build/assets/images/icons/tiktok.svg') }}" alt="TikTok" /></a>
                </li>
                <li>
                    <a href="#"><img src="{{ asset('build/assets/images/icons/youtube.svg') }}" alt="Youtube" /></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END SIDEBAR -->
</header>
<!-- END HEADER -->
