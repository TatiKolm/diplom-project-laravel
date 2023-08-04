@extends('admin-dashboard.app')

@section('content')
  
    
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4 ">
                                        <h1 class="page-header-title">
                                            Товары
                                        </h1>
                                        <a href="{{ route('products.create') }}" class="btn btn-secondary mt-5">Добавить новый</a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Список товаров</div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Изображение</th>
                                            <th>Название</th>
                                            <th>Категория</th>
                                            <th>Цена</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                            <td>
                                                <img src="{{ $product->getImage() }}" alt="" style="height:100px">
                                            </td>
                                            <td>
                                            {{ $product->title }}
                                            </td>
                                            <td>
                                            {{ $product->category->name }}
                                            </td>
                                            <td>
                                            {{ $product->price }}
                                            </td>
                                            <td>
                                            <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">
                                                Редактировать
                                                </a>
                                            </td>
                                            <td>
                                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="mx-3">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="event.preventDefault(); if(confirm('Запись будет удалена. Продолжить?')){this.closest('form').submit();}">
                                                    Удалить
                                                    </button>
                                                </form>
                                            </td>
                                           
                                        </tr>
                                    @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
   
@endsection
