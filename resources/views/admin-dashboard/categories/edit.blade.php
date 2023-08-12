@extends('admin-dashboard.app')

@section('content')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                        Редактирование категории
                                        </h1>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">{{ $category->name . ' (текущее значение)' }}</div>
                            <div class="card-body">
                            <form action="{{route('categories.update', $category->id)}}" method="POST">
                                @csrf @method("PUT")
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Название категории</label>
                                    <input type="text" id="name" name="name" value="{{$category->name}}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Изображение</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                    @error('image')
                                        <small class="text-denger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </form>
                            </div>
                        </div>
                    </div>


@endsection