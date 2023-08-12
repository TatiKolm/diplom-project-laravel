@extends('layouts.app')
@section('content')
<!-- Start Cart Area -->
<section class="cart-area ptb-100">
            <div class="container">
            @if($cart)
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form>
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Товар</th>
                                            <th scope="col">Наименование</th>
                                            <th scope="col">Цена</th>
                                            <th scope="col">Количество</th>
                                            <th scope="col">Сумма</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($cart->items as $item)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="{{$item->product->getImage()}}" alt="item">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="{{ route('app.product-page', $item->product->slug)}}">{{$item->product->title}}</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">{{$item->price}} руб.</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <form action="{{ route('cart.item.qty-update', $item)}}" method="POST">
                                                        @csrf @method("PUT")
                                                        <span class="minus-btn">
                                                            <i class='bx bx-minus'></i>
                                                        </span>
                                                        <input type="text" value="{{$item->quantity}}" class="change-qty" name="quantity">
                                                        <span class="plus-btn">
                                                            <i class='bx bx-plus'></i>
                                                        </span>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">{{$item->sub_total}} руб.</span>
                                                
                                                <td>
                                                    <form action="{{ route('cart.item.destroy', $item)}}" method="POST">
                                                        @csrf @method("DELETE")
                                                        <button class="btn btn-danger btn-sm">Удалить</button>
                                                    </form>
                                                </td>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-buttons">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-sm-7 col-md-7">
                                        <a href="shop-1.html" class="default-btn">
                                            Добавить товары
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="cart-totals">
                                <h3>Сумма заказа</h3>
                                <ul>
                                    <li>Итого 
                                        <span><b>{{$cart->getTotalPrice()}} руб.</b></span>
                                    </li>
                                </ul>
                                <a href="{{route('app.checkout')}}" class="default-btn">
                                    Оформить заказ
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                @else
    <div>
        <p>Ваша корзина пуста</p>
        <a href="/" class="btn default-btn">Вернуться на главную</a>
    </div>
    @endif
            </div>
        </section>
		<!-- End Cart Area -->
@endsection