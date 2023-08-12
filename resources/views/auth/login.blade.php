@extends('layouts.app')
@section('content')

        <!-- Start Login Area -->
        <section class="login-area ptb-100">
            <div class="container">
                <div class="login-form">
                    <h2>Вход в аккаунт</h2>
                    @if(session('success_register'))
                    <div class="alert alert-success">
                        {{ session('success_register') }}
                    </div>
                    @endif

                    <form action="{{ route('auth.login')}}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label>Ваш email</label>
                            <input type="text" name="email" class="form-control" placeholder="Введите ваш email">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="password" name="password" class="form-control" placeholder="Введите ваш пароль">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <button type="submit" class="default-btn">Войти</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Login Area -->
@endsection