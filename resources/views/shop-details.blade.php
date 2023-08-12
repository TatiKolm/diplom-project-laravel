@extends('layouts.app')
@section('content')


        <!-- Start Product Details Area -->
        <section class="product-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div><img src="{{ $product->getImage() }}" alt=""></div>
                            </div>
        
                            <div class="col-lg-6 col-md-12">
                                <div class="product-details-desc">
                                    <h3>{{ $product->title }}</h3>
                                    <div class="price">
                                        <span class="new-price">{{ $product->price }} руб.</span>
                                    </div>
                                   <p>Состав</p>
                                    <p>{{ $product->description}}</p>
                                    <div class="product-add-to-cart d-flex">
                                        <div class="input-counter">
                                            <span class="minus-btn">
                                                <i class='bx bx-minus'></i>
                                            </span>
                                            <input type="text" min="1" value="1" id="items_qty">
                                            <span class="plus-btn">
                                                <i class='bx bx-plus'></i>
                                            </span>
                                        </div>
                                        <a href="{{route('cart.add-product', $product)}}" type="button" class="default-btn add-to-cart">В корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="tab products-details-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <ul class="tabs">
                                        <li>
                                            <a href="#">
                                                <div class="dot"></div> 
                                                Описание
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="tab_content">
                                        <div class="tabs_item">
                                            <div class="products-details-tab-content">
                                                <p>{{ $product->description}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                
                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            <section class="widget widget_popular_products">
                                <h3 class="widget-title">Новинки</h3>
                                @foreach($products as $product)

                                <article class="item">
                                    <a href="#" class="thumb">
                                        <img src="{{ $product->getImage() }}" alt="">
                                    </a>
                                    <div class="info">
                                        <span>{{$product->price}} руб.</span>
                                        <h4 class="title usmall"><a href="{{ route('app.product-page', $product->slug)}}">{{$product->title}}</a></h4>
                                        
                                    </div>
                                </article>
                                @endforeach
                            </section>

                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Details Area -->

@endsection