@extends('layouts.app')
@section('content')
        
        <!-- Start Checkout Area -->
		<section class="checkout-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="user-actions">
                            <i class='bx bx-link-external'></i>
                            <span>Новый покупатель? 
                                <a href="{{ route('auth.register')}}">Нажмите для регистрации</a>
                            </span>
                        </div>
                    </div>
                </div>
                <form action="{{ route('app.store-order') }}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="billing-details">
                                <h3 class="title">Детали доставки</h3>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Ваше имя<span class="required">*</span></label>
                                            <input type="text" name="user_name" class="form-control" value="{{ old('user_name')}}">
                                            @error('user_name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label>Улица <span class="required">*</span></label>
                                            <input type="text" name="user_street" class="form-control" value="{{ old('user_street')}}">
                                            @error('user_street')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>№ дома<span class="required">*</span></label>
                                            <input type="text" name="user_house" class="form-control" value="{{ old('user_house')}}">
                                            @error('user_house')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>№ квартиры <span class="required">*</span></label>
                                            <input type="text" name="user_apartment" class="form-control" value="{{ old('user_apartment')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Email<span class="required">*</span></label>
                                            <input type="email" name="email" class="form-control" value="{{ old('email')}}">
                                            @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Телефон<span class="required">*</span></label>
                                            <input type="text"  name="phone" class="form-control" value="{{ old('phone')}}" id="phone">
                                            @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="order_notes" id="notes" cols="30" rows="5" placeholder="Комментарии к заказу" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="order-details">
                                <h3 class="title">Ваш Заказ</h3>
                                <div class="order-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Наименование</th>
                                                <th scope="col">Сумма</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($cart->items as $item)
                                            <tr>
                                                <td class="product-name">
                                                    <a href="shop-details.html">{{$item->product->title}}</a>
                                                </td>
                                                <td class="product-total">
                                                    <span class="subtotal-amount">{{$item->sub_total}} руб.</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                                <td class="total-price">
                                                    <span>Итог</span>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">{{$cart->getTotalPrice()}} руб.</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="payment-box">
                                    <div class="payment-method">
                                        <p>Выберите способ оплаты</p>
                                            
                                        <p>
                                            <input type="radio" id="paypal" name="pay" value="card">
                                            <label for="paypal">Картой</label>
                                        </p>
                                        <p>
                                            <input type="radio" id="cash-on-delivery" name="pay" value="cash">
                                            <label for="cash-on-delivery">Наличными при получении</label>
                                        </p>
                                    </div>
                                    <button class="default-btn">
                                        Оформить заказ
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
		<!-- End Checkout Area -->
@endsection