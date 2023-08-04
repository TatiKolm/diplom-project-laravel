@extends('layouts.app')
@section('content')


        <!-- Start Top Products Area -->
        <section class="top-products-area pt-100 pb-100">
            <div class="container">
                <div class="orgo-grid-sorting row align-items-center">
                    <div class="col-lg-6 col-md-6 result-count">
                        <h1>{{ $category->name }}</p>
                    </div>
                </div>
                @if ($products->count())
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="top-products-item">
                            <div class="products-image">
                                <a href="shop-details.html"><img src="{{$product->getImage()}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="cart.html" data-tooltip="tooltip" data-placement="top" title="в корзину"><i class="flaticon-shopping-cart"></i></a>
                                    </li>
                                    
                                    <li>
                                        <a href="#" data-tooltip="tooltip" data-placement="top" title="просмотр" data-toggle="modal" data-target="#productsQuickView">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="shop-details.html">{{$product->title}}</a>
                                </h3>
                                <div class="price">
                                    <span class="new-price">{{$product->price}} руб.</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                @else
            <p class="my-4">Пока нет блюд в этой категории</p>
        @endif
            </div>
        </section>
        <!-- End Top Products Area -->
@endsection