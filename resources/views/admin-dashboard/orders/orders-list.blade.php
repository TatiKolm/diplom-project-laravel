@extends('admin-dashboard.app')

@section('content')
  
    
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4 ">
                                        <h1 class="page-header-title">
                                            Заказы
                                        </h1>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Список заказов</div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <th>№ заказа</th>
                                        <th>Имя</th>
                                        <th>Адрес доставки</th>
                                        <th>Телефон</th>
                                        <th>Детали заказа</th>
                                        <th>Комментарий</th>
                                        <th>Статус</th>
                                    </thead>

                                    <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->user_name }}</td>
                                            
                                            <td>{{ $order->getCustomerAdress() }}</td>
                                            <td ><p class="phone">{{ $order->phone }}</p></td>
                                            <td><a href="">Заказ</a></td>
                                            <td>{{ $order->order_notes }}</td>
                                            <td>
                                            <form action="{{route('order.change-status', $order)}}" method="GET">
                                                <select name="status" class="change-status form-control">
                                                    <option value="in_process" @if($order->status == 'in_process') selected @endif>{{__('statuses.in_process')}}</option>
                                                    <option value="finished" @if($order->status == 'finished') selected @endif>{{__('statuses.finished')}}</option>
                                                    <option value="canceled" @if($order->status == 'canceled') selected @endif>{{__('statuses.canceled')}}</option>
                                                    <option value="paid" @if($order->status == 'paid') selected @endif>{{__('statuses.paid')}}</option>
                                                </select>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
   
@endsection
