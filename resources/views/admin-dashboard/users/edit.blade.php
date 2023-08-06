@extends('admin-dashboard.app')

@section('content')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                        Редактирование пользователя
                                        </h1>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="container-xl px-4 mt-n10">
                        <div class="card mb-4">
                            <div class="card-header">{{ $user->name . ' (текущее значение)' }}</div>
                            <div class="card-body">
                            <form action="{{ route('users.update', $user) }}" method="POST">
                                @csrf @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Имя</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                    value="{{old("name", $user->name)}}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                @if($user->id != auth()->user()->id)

                                    <div class="form-group mb-3">
                                        <p>Роли</p>

                                        @foreach ($roles as $role)
                                            <label for="{{ 'role_' . $role->id }}" class="form-label">
                                                <input type="checkbox" id="{{ 'role' . $role->id }}" name="roles[]" class="form-check-input"
                                                    value="{{ $role->name }}" @if ($user->roles->contains(old('role_' . $role->id, $role->id))) checked @endif>
                                                {{ $role->name }}
                                            </label>
                                        @endforeach
                                    </div>
                                    <div class="form-group mb-3">
                                        <p>Права</p>

                                        @foreach ($permissions as $permission)
                                            <label for="{{ 'permission_' . $permission->id }}" class="form-label">
                                                <input type="checkbox" id="{{ 'permission' . $permission->id }}" name="permissions[]" class="form-check-input"
                                                    value="{{ $permission->name }}" @if ($user->hasPermissionTo($permission->name)) checked @endif>
                                                {{ $permission->name }}
                                            </label>
                                        @endforeach
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </form>
                            </div>
                        </div>
                    </div>


@endsection