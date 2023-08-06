@extends('layouts.app')
@section('content')


        <!-- Start Register Area -->
        <section class="register-area ptb-100">
            <div class="container">
                <div class="register-form">
                    <h2>Регистрация</h2>

                    <form action="{{ route('auth.store-user')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Имя</label>
                            <input type="text" name="name" class="form-control" placeholder="Введите имя" value="{{ old('name')}}">
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Введите Email" value="{{ old('email')}}">
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="password" name="password" class="form-control" placeholder="Введите пароль">
                            @error('password')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Повторите пароль">
                        </div>

                        <p class="description">Пароль должен содержать миниму 8 символов. Чтобы пароль был более надежным используйте символы ! " ? $ % ^ & )</p>

                        <button type="submit" class="default-btn">Регистрация</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Register Area -->
@endsection