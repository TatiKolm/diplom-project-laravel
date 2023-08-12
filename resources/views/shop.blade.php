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
                                <a href="{{ route('app.product-page', $product->slug)}}"><img src="{{$product->getImage()}}" alt="image"></a>

                                <ul class="products-action">
                                    <li>
                                        <a href="{{route('cart.add-product', $product)}}" data-tooltip="tooltip" data-placement="top" title="в корзину" class="add-to-cart"><i class="flaticon-shopping-cart "></i></a>
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
                                    <a href="{{ route('app.product-page', $product->slug)}}">{{$product->title}}</a>
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

        
        <!-- Start QuickView Modal Area -->
        <div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="flaticon-cancel"></i></span>
                    </button>

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div ><img src="{{$product->getImage()}}" alt="image"></div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="product-content">
                                <h3>{{$product->title}}</h3>
                                <div class="price">
                                    <span class="new-price">{{$product->price}} руб.</span>
                                </div>
                                <p>{{$product->description}}</p>
                                <div class="product-add-to-cart d-flex">
                                    <div class="input-counter">
                                        <span class="minus-btn">
                                            <i class='bx bx-minus'></i>
                                        </span>
                                        <input type="text" value="1" id="items_qty">
                                        <span class="plus-btn">
                                            <i class='bx bx-plus'></i>
                                        </span>
                                    </div>
                                    <a href="{{route('cart.add-product', $product)}}" type="button" class="default-btn add-to-cart">В корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End QuickView Modal Area -->
@endsection