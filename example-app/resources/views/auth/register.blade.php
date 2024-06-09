@extends('layouts.auth')

@section('content')
    <div class="h-screen w-full flex items-center justify-center">
        <div class="login-block max-w-xl w-full h-auto p-8 border-4 border-black rounded-2xl">
            <div class="title text-center font-bold text-3xl mb-5">
                <h2>Войти</h2>
            </div>
            <div class="desc text-center text-2xl mb-5">
                <p>Войдите в аккаунт, чтобы пользоваться нашим сервисом</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="label mb-2">
                    <label>Имя</label>
                </div>
                <div class="input mb-5">
                    <input class="w-full h-10 border-2 border-black rounded-md px-4" type="text" name="name"
                        id="name">
                </div>
                <div class="label mb-2">
                    <label>Электронная почта</label>
                </div>
                <div class="input mb-5">
                    <input class="w-full h-10 border-2 border-black rounded-md px-4" type="email" name="email"
                        id="email">
                </div>
                <div class="label mb-2">
                    <label>Пароль</label>
                </div>
                <div class="input mb-5">
                    <input class="w-full h-10 border-2 border-black rounded-md px-4" type="password" name="password"
                        id="password">
                </div>
                <div class="label mb-2">
                    <label>Подтвердить пароль</label>
                </div>
                <div class="input mb-10">
                    <input class="w-full h-10 border-2 border-black rounded-md px-4" type="password"
                        name="password_confirmation" id="password_confirmation">
                </div>
                <div class="submit text-center mb-10">
                    <input class="w-1/2 h-12 border-2 border-black rounded-md hover:text-white hover:bg-black"
                        type="submit" value="Регистрация">
                </div>
                <div class="text-center mb-5">
                    <a href="{{ route('login') }}" class="hover:underline">Уже есть аккаунт</a>
                </div>
                <div class="text-center">
                    <a href="{{ route('index') }}" class="hover:underline">На главную</a>
                </div>
            </form>
        </div>
    </div>
@endsection
