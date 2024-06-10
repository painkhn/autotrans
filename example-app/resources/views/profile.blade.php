@extends('layouts.app')

@section('content')
    <div class="max-w-1774px w-full h-auto mx-auto my-20">
        <div class="flex justify-between">
            <div class="user_info border-4 border-black rounded-xl p-8 max-w-xl w-full grow">
                <div class="avatar mb-5">
                    <img src="{{ asset('img/avatar_default.png') }}" alt=""
                        class="w-h-530px border-4 border-black rounded-xl">
                </div>
                <div class="name text-4xl font-bold mb-5">
                    <p>{{ Auth::user()->name }}</p>
                </div>
                <div class="email text-xl">
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
            <div class="favorites w-full ml-10">
                <div class="title font-bold text-4xl text-center mb-8">
                    <h2>Избранные автомобилей нет</h2>
                </div>
                <div class="title font-bold text-4xl text-center mb-8">
                    <h2>Избранные автомобили</h2>
                </div>
                <ul>
                    <li class="mb-8">
                        <div class="border-4 border-black rounded-xl p-14">
                            <div class="flex mb-8">
                                <img src="../src/img/auto-1.png" alt=""
                                    class="max-w-md w-full h-auto border-4 border-black rounded-xl">
                                <div class="list ml-8">
                                    <ul>
                                        <li class="text-4xl font-bold">
                                            <p>Цена: <span>1 300 000 RUB</span></p>
                                        </li>
                                        <li class="text-4xl font-bold">
                                            <p>Пробег: <span>110 000 км</span></p>
                                        </li>
                                        <li class="text-4xl font-bold">
                                            <p>Комплектация: <span>1.8 S 4WD</span></p>
                                        </li>
                                        <li class="text-4xl font-bold">
                                            <p>Поколение: <span>2-ое</span></p>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <button
                                                    class="max-w-md w-full h-14 border-2 border-black rounded-md hover:text-white hover:bg-black text-2xl">Подробнее</button>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="font-bold text-3xl mb-5">
                                <p>Свяжитесь с менеджером Антоном по поводу автомобиля.</p>
                            </div>
                            <div class="font-bold text-3xl">
                                <p>Электронная почта для связи: antonauto@mail.ru</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
