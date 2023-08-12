@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="my-5">Спасибо за заказ!</h1>

    <p class="mb-">
        Ваш заказ №{{$order->id}} успешно оформлен! 
        Статус заказа - {{ __('statuses.'.$order->status) }}
    </p>
</div>

@endsection