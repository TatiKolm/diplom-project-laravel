@extends('admin-dashboard.app')

@section('content')
  
    
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4 ">
                                        <h1 class="page-header-title">
                                            Пользователи
                                        </h1>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">Список пользователей</div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Имя</th>
                                            <th>Email</th>
                                            <th>Роли</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->getRoles() }}</td>
                                            <td class="d-flex">
                                                <a href="{{route("users.edit", $user)}}" class="btn btn-sm btn-warning">
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
