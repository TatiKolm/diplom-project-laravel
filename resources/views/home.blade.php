@extends('layouts.app')

@section('content')
<!-- Start Main Slider Area -->
<div class="main-slider-area">
            <div class="home-slides owl-carousel owl-theme">
                <div class="main-slider-item main-slider-two">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="main-slider-content">
                                            <span>Мы гарантируем, что каждый кусочек будет вкусным и приготовленным с любовью.</span>
                                            <h1>"GoodFood на вашем столе!"</h1>
                                            <p>Не теряйте время на готовку и очереди, наслаждайтесь разнообразием вкусов с нашей удобной доставкой еды. Закажите прямо сейчас и позвольте нам позаботиться о вашем полноценном питании!"</p>
                                            <div class="slider-btn">
                                                <a href="shop-1.html" class="default-btn">Меню</a>
                                                <a href="cart.html" class="optional-btn">В корзину</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="main-slider-image-wrap">
                                            <img src="{{ asset('assets/img/main-slider/main-slider-2.jpg')}}" alt="image">

                                            <div class="slider-shape">
                                                <img src="assets/img/main-slider/main-slider-shape.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-slider-item main-slider-two">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="main-slider-content">
                                            <span>Take Natural Taste From Our Shop</span>
                                            <h1>Vegetables Good For Health</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                                            <div class="slider-btn">
                                                <a href="shop-1.html" class="default-btn">Our Shop</a>
                                                <a href="cart.html" class="optional-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="main-slider-image-wrap">
                                            <img src="assets/img/main-slider/main-slider-3.jpg" alt="image">

                                            <div class="slider-shape">
                                                <img src="assets/img/main-slider/main-slider-shape.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-slider-shape">
                <div class="shape-1">
                    <img src="assets/img/main-slider/slider-shape-1.png" alt="image">
                </div>

                <div class="shape-2">
                    <img src="assets/img/main-slider/slider-shape-2.png" alt="image">
                </div>
            </div>
        </div>
        <!-- End Main Slider Area -->

        <!-- Start Special Features Area -->
        <section class="special-features-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Special Features</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-special-features">
                            <div class="image">
                                <img src="{{ asset('assets/img/special-features/special-features-1.png')}}" alt="image">
                            </div>

                            <div class="content">
                                <h3>Fresh Organic Food Provides</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-special-features">
                            <div class="image">
                                <img src="assets/img/special-features/special-features-2.png" alt="image">
                            </div>

                            <div class="content">
                                <h3>Fast & Easy Food Delivery</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-special-features">
                            <div class="image">
                                <img src="assets/img/special-features/special-features-3.png" alt="image">
                            </div>

                            <div class="content">
                                <h3>Very Easy Payment System</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</p>
                                <a href="#" class="read-btn">Read More +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Special Features Area -->

        <!-- Start Top Products Area -->
        <section class="top-products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Trending Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-1.jpg" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sale">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Darling Oranges</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$38.00</span>
                                    <span class="old-price">$125.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-2.jpg" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sale">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Strawberry</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$30.00</span>
                                    <span class="old-price">$116.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-3.jpg" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sale">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Cabbage</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$40.00</span>
                                    <span class="old-price">$179.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-4.jpg" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sale">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Nectarine</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$45.00</span>
                                    <span class="old-price">$135.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-5.jpg" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sale">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Seasoned Tomatoes</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$68.00</span>
                                    <span class="old-price">$168.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-6.jpg" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sale">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Seasoned Carrot</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$30.00</span>
                                    <span class="old-price">$130.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-7.jpg" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sale">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Pineapple</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$39.00</span>
                                    <span class="old-price">$139.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="assets/img/top-products/top-products-8.jpg" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="flaticon-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sale">
                                    <span>Sale</span>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">Fresh Banana</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">$17.00</span>
                                    <span class="old-price">$115.00</span>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Products Area -->
        
        <!-- Start Features Area -->
        <section class="features-area pt-100 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="features-image">
                            <img src="assets/img/features-2.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="features-item">
                            <div class="features-content">
                                <span>Что мы прелагаем</span>
                                <h3>Широкий выбор блюд</h3>
                                <p>От пикантных азиатских вкусностей до классической итальянской пасты.</p>
                            </div>

                            <div class="features-inner-content">
                                <div class="icon">
                                    <i class="flaticon-nature"></i>
                                </div>
                                <h4>Высокое качество</h4>
                                <p>Вся наша еда готовится опытными повара и используются только свежие, натуральные ингредиенты.</p>
                            </div>

                            <div class="features-inner-content">
                                <div class="icon">
                                    <i class="flaticon-leaf"></i>
                                </div>
                                <h4>Разнообразие опций</h4>
                                <p>У нас есть блюда для всех ваших предпочтений и диетических потребностей. </p>
                            </div>

                            <div class="features-inner-content">
                                <div class="icon">
                                    <i class="flaticon-medal"></i>
                                </div>
                                <h4>Сервис высшего класса</h4>
                                <p>Ваше удовлетворение является нашим приоритетом.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Area -->


        <!-- Start Team Area -->
        <section class="team-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Our Farm Land Farmers</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="assets/img/team/team-1.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>Alex Maxwel</h3>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="assets/img/team/team-2.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>Justin Roberto</h3>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="assets/img/team/team-3.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>Louis Agassiz</h3>
                                <span>Organic Farmer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="assets/img/team/team-4.jpg" alt="image">

                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="content">
                                <h3>Carl Anderson</h3>
                                <span>Agriculturist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Area -->


        <!-- Start Client Area -->
        <section class="client-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Client’s Feedback</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="client-slider owl-carousel owl-theme">
                    <div class="client-item">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley</p>

                        <div class="client-info">
                            <img src="assets/img/client/client-1.jpg" alt="image">
                            <h3>Jacinda Meri</h3>
                            <span>Founder</span>
                        </div>
                    </div>

                    <div class="client-item">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley</p>

                        <div class="client-info">
                            <img src="assets/img/client/client-2.jpg" alt="image">
                            <h3>Miraj Alex</h3>
                            <span>Organic Farmer</span>
                        </div>
                    </div>

                    <div class="client-item">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley</p>

                        <div class="client-info">
                            <img src="assets/img/client/client-3.jpg" alt="image">
                            <h3>Edward Bold</h3>
                            <span>Agriculture Farmer</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Client Area -->

    
@endsection        