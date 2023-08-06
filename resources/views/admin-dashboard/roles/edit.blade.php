@extends('admin-dashboard.app')

@section('content')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                        Редактирование роли
                                        </h1>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">{{ $role->name . ' (текущее значение)' }}</div>
                            <div class="card-body">
                            <form action="{{ route('roles.update', $role) }}" method="POST">
                                @csrf @method("PUT")
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Название роли</label>
                                    <input type="text" id="name" name="name"
                                        class="form-control" value="{{old('name', $role->name)}}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <p>Права</p>

                                    @foreach ($permissions as $perm)
                                        <label for="{{ 'perm_' . $perm->id }}" class="form-label">
                                            <input type="checkbox" id="{{ 'perm_' . $perm->id }}" name="permissions[]" class="form-check-input"
                                                value="{{ $perm->name }}" @if ($role->permissions->contains(old('perm_' . $perm->id, $perm->id))) checked @endif>
                                            {{ $perm->name }}
                                        </label>
                                    @endforeach
                                </div>

                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </form>
                            </div>
                        </div>
                    </div>


@endsection