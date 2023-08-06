@extends('admin-dashboard.app')
@section('content')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                        Создание новой роли
                                        </h1>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-body">
                            <form action="{{ route('roles.store') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Название роли</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Создать</button>
                            </form>
                            </div>
                        </div>
                    </div>


@endsection
