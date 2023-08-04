@extends('admin-dashboard.app')

@section('content')
  
    
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            Категории
                                        </h1>
                                        <a href="{{ route('categories.create') }}" class="btn btn-secondary mt-5">Добавить новую</a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Список категорий товаров</div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Название</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">
                                                Редактировать
                                                </a>
                                                <form action="{{ route('categories.delete', $category->id) }}" method="POST" class="mx-3">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="event.preventDefault(); if(confirm('Запись будет удалена. Продолжить?')){this.closest('form').submit();}">
                                                    Удалить
                                                    </button>
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
