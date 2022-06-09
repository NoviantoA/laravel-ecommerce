<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <!-- select2.org -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- bootstrap datetimepicker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/6-beta4/css/tempus-dominus.min.css"
        integrity="sha512-MAE2fieZOXaN7hawt+GziEfza/z8IyG2Xbt2Aw68NrTPzHBzOF66A0/Vr5PU+MgFs1H4/uWH6AbANhuxZT03Hw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- nouislider cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.css"
        integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles

</head>

<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hubungi: (+62) 9539 7358 265" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>Hubungi: (+62) 9539 7358
                                        265</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>

                                </li>
                                <!-- <li class="menu-item lang-menu menu-item-has-children parent">
                                    <a title="English" href="#"><span class="img label-before"><img
                                                src="{{ asset('assets/images/lang-en.png')}}"
                                                alt="lang-en"></span>English<i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="submenu lang">
                                        <li class="menu-item"><a title="hungary" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-hun.png')}}"
                                                        alt="lang-hun"></span>Hungary</a></li>
                                        <li class="menu-item"><a title="german" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-ger.png')}}"
                                                        alt="lang-ger"></span>German</a></li>
                                        <li class="menu-item"><a title="french" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-fra.png')}}"
                                                        alt="lang-fre"></span>French</a></li>
                                        <li class="menu-item"><a title="canada" href="#"><span
                                                    class="img label-before"><img
                                                        src="{{ asset('assets/images/lang-can.png')}}"
                                                        alt="lang-can"></span>Canada</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="menu-item menu-item-has-children parent">
                                    <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                        </li>
                                    </ul>
                                </li> -->
                                @if(Route::has('login'))
                                @auth
                                @if(Auth::user()->utype === 'ADM')
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="My Account" href="#">Akun Saya ({{Auth::user()->name}})<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Categories" href="{{route('admin.categories')}}">Kategori</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.prducts')}}" title="Products">Produk</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.homeslider')}}" title="Manage Home Slider">Kelola
                                                Home Slider</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.homecategories')}}"
                                                title="Manage Home Kategori">Kelola Kategori Home </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.sale')}}" title="Sale Setting">Beranda Sale</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.coupons')}}" title="Semua Kupon">Kupon</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('admin.orders')}}" title="Semua Order">Order</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('admin.contact') }}" title="Pesan Contact">Kelola Pesan
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('admin.settings') }}" title="Setting">Pengaturan</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                                Out</a>
                                        </li>
                                        <form id="logout-form" method="POST" action="{{ route('logout')}}">
                                            @csrf

                                        </form>
                                    </ul>
                                </li>
                                @else
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="My Account" href="#">Akun Saya ({{Auth::user()->name}})<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Order" href="{{ route('user.orders') }}">Order</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                                Out</a>
                                        </li>
                                        <form id="logout-form" method="POST" action="{{ route('logout')}}">
                                            @csrf

                                        </form>
                                    </ul>
                                </li>
                                @endif


                                @else
                                <li class="menu-item"><a title="Register or Login" href="{{route('login')}}">Login</a>
                                </li>
                                <li class="menu-item"><a title="Register or Login"
                                        href="{{route('register')}}">Registrasi</a>
                                    @endif

                                    @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="index.html" class="link-to-home"><img src="{{ asset('assets/images/logo.png')}}"
                                    alt="mercado"></a>
                        </div>

                        @livewire('header-search-component')

                        <div class="wrap-icon right-section">

                            @livewire('wishlist-count-component')
                            @livewire('cart-count-component')

                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-section header-sticky">
                    <div class="header-nav-section">
                        <div class="container">
                            <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info">
                                <li class="menu-item"><a href="#" class="link-term">Top Minggu Ini</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Hot Sale</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Top Produk Baru</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Top Penjualan</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Top Rating</a><span
                                        class="nav-label hot-label">hot</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="about-us.html" class="link-term mercado-item-title">About Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/shop" class="link-term mercado-item-title">Belanja</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/cart" class="link-term mercado-item-title">Keranjang</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title">Checkout</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/contact-kami" class="link-term mercado-item-title">Hubungi Kami</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{$slot}}

    <!-- footer -->
    @livewire('footer-component')


    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <!-- select2.org -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- datetimepicker bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/6-beta4/js/tempus-dominus.min.js"
        integrity="sha512-OaImY8vZKab5dabyJF4sR+jb78aCQm2sbN+sEseO4D6NHp7jM91rgn+z4KDRol9RE4NCRybfiCBsxfImPtv+ow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- moment js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"
        integrity="sha512-x/vqovXY/Q4b+rNjgiheBsA/vbWA3IVvsS8lkQSX1gQ4ggSJx38oI2vREZXpTzhAv6tNUaX81E7QBBzkpDQayA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- nouislider cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js"
        integrity="sha512-T5Bneq9hePRO8JR0S/0lQ7gdW+ceLThvC80UjwkMRz+8q+4DARVZ4dqKoyENC7FcYresjfJ6ubaOgIE35irf4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- tinyMCE -->
    <script src="https://cdn.tiny.cloud/1/hfw8y40toy6pbzat1xvmc3h99mdig9odw3ywml3ku5b5ul1t/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    @livewireScripts

    @stack('scripts')
</body>

</html>