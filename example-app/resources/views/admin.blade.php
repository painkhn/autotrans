@extends('layouts.app')

@section('content')
    <div class="h-main max-w-1774px w-full mx-auto my-10">
        <div class="title font-bold text-5xl text-center mb-10">
            <h2>Страница администратора</h2>
        </div>
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
            <div class="user_search max-w-5xl w-full h-auto p-10 border-4 border-black rounded-xl grow">
                <div class="title font-bold text-4xl text-center mb-10">
                    <h3>Пользователи</h3>
                </div>
                <div class="search w-full mb-10">
                    <form class="flex items-center">
                        <input type="search" name="" id="" placeholder="Электронная почта"
                            class="border-2 border-black rounded-md h-20 text-2xl px-4 w-full">
                        <button type="submit" class="border-none w-7 h-7 ml-2">
                            <img src="{{ asset('img/search-icon.svg') }}" alt="" class="w-7 h-7">
                        </button>
                    </form>
                </div>
                <div class="user_search_block flex items-center">
                    <img src="{{ asset('img/avatar_default.png') }}" alt=""
                        class="w-h-200px border-2 border-black rounded-xl">
                    <div class="user_block_info ml-10">
                        <div class="name text-4xl font-bold mb-5">
                            <p>Генерал Майонез</p>
                        </div>
                        <div class="email text-xl mb-5">
                            <p>majik@mail.ru</p>
                        </div>
                        <div class="ban_button">
                            <button type="submit"
                                class="w-full h-14 border-2 border-black rounded-xl hover:underline text-2xl">БАН</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="add_auto pt-10">
            <form class="flex justify-between" action="{{ route('addproduct') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <ul class="w-1/2 pr-10">
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Название</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="name">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Цена</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="price">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Двигатель (топливо и объём)</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="engine">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Мощность (л.с.)</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="power">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Коробка передач</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="transmission">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Привод (ведущая ось)</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="drive">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Цвет</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="color">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Руль (сторона)</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="rudder">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Страна производства</label>
                        </div>
                        <select class="border-2 border-black w-full h-12 rounded-md px-4 text-xl" name="country_id">
                            @foreach ($country as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Комплектация</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="equipment">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Поколение</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="generation">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Дополнителная информация</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="description">
                    </li>
                </ul>
                <div class="add_img">
                    <div class="title font-bold text-4xl text-center mb-10">
                        <p>Добавить фотографию автомобиля</p>
                    </div>
                    <div class="flex justify-center mb-10">
                        <label
                            class="block w-h-700px rounded-xl overflow-hidden border-2 border-black cursor-pointer hover:shadow-xl hover:shadow-gray-300 transition-all">
                            <input type="file" class="hidden" name="photo">
                            <div class="flex flex-col justify-center items-center h-full">
                                <img src="{{ asset('img/add-icon.png') }}" alt="">
                            </div>
                        </label>
                    </div>
                    <div class="submit">
                        <input type="submit" value="ДОБАВИТЬ ТОВАР"
                            class="w-full h-24 border-2 border-black rounded-xl text-2xl hover:underline hover:shadow-xl hover:shadow-gray-300 transition-all">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
