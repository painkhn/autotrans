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
                @if ($likes)
                    <div class="title font-bold text-4xl text-center mb-8">
                        <h2>Избранные автомобили</h2>
                    </div>
                    <ul>
                        @foreach ($likes as $like)
                            @foreach ($like->positions as $item)
                                <li class="mb-8">
                                    <div class="border-4 border-black rounded-xl p-14">
                                        <div class="flex mb-8">
                                            <img src="{{ asset($item->photo) }}" alt=""
                                                class="max-w-md w-full h-auto border-4 border-black rounded-xl">
                                            <div class="list ml-8">
                                                <ul>
                                                    <li class="text-4xl font-bold">
                                                        <p>Цена: <span>{{ $item->price }} RUB</span></p>
                                                    </li>
                                                    <li class="text-4xl font-bold">
                                                        <p>Комплектация: <span>{{ $item->rudder }}</span></p>
                                                    </li>
                                                    <li class="text-4xl font-bold">
                                                        <p>Поколение: <span>{{ $item->generation }}</span></p>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('OpenProduct', ['product_id' => $item->id]) }}">
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
                            @endforeach
                        @endforeach
                    </ul>
                @else
                    <div class="title font-bold text-4xl text-center mb-8">
                        <h2>Избранные автомобилей нет</h2>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
