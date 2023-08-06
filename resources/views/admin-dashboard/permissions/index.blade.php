@extends('admin-dashboard.app')

@section('content')
  
    
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            Права пользователей
                                        </h1>
                                        <a href="{{ route('permissions.create') }}" class="btn btn-secondary mt-5">Добавить</a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Список прав</div>
                            <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Право</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $perm)
                                        <tr>
                                            <td>{{ $perm->name }}</td>
                                            <td class="d-flex">
                                                <a href="" class="btn btn-sm btn-warning">
                                                    Ред.
                                                </a>
                                                <form action="" method="POST" class="mx-3">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
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
