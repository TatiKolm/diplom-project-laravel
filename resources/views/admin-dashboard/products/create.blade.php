@extends('admin-dashboard.app')
@section('content')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                        Создание нового товара
                                        </h1>
                                </div>
                            </div>
                        </div>
 </header>
<div class="container-xl px-4 mt-n10">
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Название товара</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
                    @error('name')
                        <small class="text-denger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Описание товара</label>
                    <textarea type="text" id="description" name="description" class="form-control">{{old('description')}}</textarea>
                    @error('description')
                        <small class="text-denger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Изображение</label>
                    <input type="file" id="image" name="image" class="form-control">
                    @error('image')
                        <small class="text-denger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="category" class="form-label">Категория</label>
                        <select name="category" id="category" class="form-select">
                            <option value="" selected disabled>Выберите категорию</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == old('category')) selected @endif>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="price" class="form-label">Цена</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{old('title')}}">
                    @error('price')
                        <small class="text-denger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
</div>


@endsection
