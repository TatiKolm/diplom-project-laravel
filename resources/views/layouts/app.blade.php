<!doctype html>
<html lang="ru">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <!-- Owl Carousel Default CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
		
		<title>GoodFood - доставка вкусной, домашней еды</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-header-information">
                            <li>
                                <i class='bx bxs-map'></i>
                                Иваново
                            </li>
                            <li>
                                <i class='bx bxs-phone'></i>
                                <a >4932 99-99-99</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <ul class="top-header-social">
                        @if (auth()->user())
                            <li >
                                {{ auth()->user()->name }}
                            </li>
                            <li>
                                <form action="{{ route('auth.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Выйти</button>
                                </form>
                            </li>
                        @else
                            <li>
                                <a aria-current="page" href="{{ route('auth.login-page') }}">Войти</a>
                            </li>
                            <li>
                                <a aria-current="page" href="{{ route('auth.register') }}">Регистрация</a>
                            </li>
                        @endif
                        @hasanyrole('moderator|admin')
                            <li>
                                <a href="{{ route('admin.main')}}" target="_blank">
                                    Администрирование сайта
                                </a>
                            </li>
                        @endhasanyrole
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{ route('app.home')}}">
                                GoodFood
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                    <div class="logo">
                                <h2>
                                    <a href="{{ route('app.home')}}">GoodFood</a>
                                </h2>
                            </div>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ route('app.home')}}" class="nav-link active">
                                        Главная
                                    </a>
                                    
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        О нас 
                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Меню 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                    @foreach ($categories as $category)
                                        <li class="nav-item">
                                            <a href="{{ route('app.catalog-by-category', $category->slug)}}" class="nav-link">
                                            {{ $category->name }} 
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Контакты
                                    </a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                
                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class='flaticon-shopping-cart'></i>
                                            <span>0</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <form class="search-box">
                                        <input type="text" class="form-control" placeholder="Найти">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>

                                <div class="option-item">
                                    <div class="burger-menu">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <div class="languages-list">
                                        <select>
                                            <option value="1">Eng</option>
                                            <option value="2">Ger</option>
                                            <option value="3">Span</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class='flaticon-shopping-cart'></i>
                                            <span>0</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <form class="search-box">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>

                                <div class="option-item">
                                    <div class="burger-menu">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Sidebar Modal -->
        <div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <div class="sidebar-about-area">
                    <div class="title">
                        <h2>О нас</h2>
                        <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
                    </div>
                </div>

                <div class="sidebar-contact-area">
                    <div class="contact-info">
                        <div class="contact-info-content">
                            <h2>
                                <span>Закажите по телефону</span>
                                <a href="">
                                    4932 99-99-99
                                </a>
                                <span>или по почте</span>
                                <a href="mailto:orgo@gmail.com">
                                    goodfood@gmail.com
                                </a>
                            </h2>
    
                        </div>
                    </div>
                </div>

                <span class="close-btn sidebar-modal-close-btn">
                    <i class="flaticon-cancel"></i>
                </span>
            </div>
        </div>
        <!-- End Sidebar Modal -->

        @yield('content')

        <!-- Start Footer Area -->
        <div class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <h2>
                                    <a href="{{ route('app.home')}}">Good Food</a>
                                </h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul class="social">
                                <li>
                                    <a href="#" class="facebook" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Кейтеринг</h3>
    
                            <ul class="quick-links">
                                <li>
                                    <a href="#">Выездной кейтеринг</a>
                                </li>
                                <li>
                                    <a href="#">Фуршет</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Ссылки</h3>
    
                            <ul class="quick-links">
                                <li>
                                    <a href="#">О нас</a>
                                </li>
                                <li>
                                    <a href="#">Меню</a>
                                </li>
                                <li>
                                    <a href="#">Контакты</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Свяжитесь с нами</h3>

                            <ul class="footer-contact-info">
                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <span>Phone</span>
                                    <a href="tel:407409202288">(+40) 74 0920 2288</a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <span>Email</span>
                                    <a href="mailto:hello@orgo.com">hello@goodfood.com</a>
                                </li>
                                <li>
                                    <i class='bx bx-map'></i>
                                    <span>Address</span>
                                    Иваново
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p>
                                <i class="far fa-copyright"></i> 
                                Copyright @2020 Orgo. All Rights Reserved by
                                <a href="https://envytheme.com/" target="_blank">
                                    EnvyTheme
                                </a>
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li>
                                    <a href="terms-of-service.html">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-up-arrow-alt'></i>
        </div>
        <!-- End Go Top Area -->


        <!-- Jquery Slim JS -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- Popper JS -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Meanmenu JS -->
        <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
        <!-- Nice Select JS -->
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Odometer JS -->
        <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
        <!-- Jquery Appear JS -->
        <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
        <!-- Ajaxchimp JS -->
		<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
		<!-- Form Validator JS -->
		<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
		<!-- Contact JS -->
        <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
        <!-- Wow JS -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <!-- Custom JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>