@extends('layouts.app')

@section('content')
    <div class="max-w-1774px w-full h-auto mx-auto my-10">
        <div class="title font-bold text-5xl mb-8">
            <h2>Продажа: {{ $tovar->name }}</h2>
        </div>
        <div class="flex mb-8">
            <img src="{{ asset($tovar->photo) }}" alt=""
                class="max-w-3xl w-full h-auto border-4 border-black rounded-xl">
            <div class="list ml-8">
                <ul class="font-semibold">
                    <li class="text-4xl">
                        <p>Цена: <span>{{ $tovar->price }} RUB</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Двигатель: <span>{{ $tovar->engine }}</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Мощность: <span>{{ $tovar->power }}</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Поколение: <span>{{ $tovar->generation }}</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Коробка передач: <span>{{ $tovar->transmission }}</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Привод: <span>{{ $tovar->drive }}</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Цвет: <span>{{ $tovar->color }}</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Руль: <span>{{ $tovar->rudder }}</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Страна производства: <span>{{ $tovar->category->name }}</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Комплектация: <span>{{ $tovar->rudder }}</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Поколение: <span>{{ $tovar->generation }}</span></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="addit max-w-1588px w-full">
            <div class="title font-semibold text-4xl mb-5">
                <p>Дополнительно</p>
            </div>
            <div class="desc font-semibold text-4xl pl-8 mb-5">
                <p>{{ $tovar->description }}</p>
            </div>
            @if ($like)
                <a href="{{ route('ToLike', ['product_id' => $tovar->id]) }}" class="addit-btn flex items-center">
                    <label for="addit"
                        class="relative flex items-center justify-center max-w-md w-full h-24 bg-white border-2 border-black rounded-md hover:bg-gray-100 hover:border-gray-300 cursor-pointer">
                        <img src="{{ asset('img/star-icon.png') }}" alt=""
                            class="absolute left-4 top-1/2 transform -translate-y-1/2 w-10 h-10">
                        <span class="text-4xl font-bold">В избранном</span>
                    </label>
                    <div class="addit-desc ml-10 text-2xl">
                        <p>С вами свяжутся наши сотрудники при добавлении авто в избранное </p>
                    </div>
                </a>
            @else
                <a href="{{ route('ToLike', ['product_id' => $tovar->id]) }}" class="addit-btn flex items-center">
                    <label for="addit"
                        class="relative flex items-center justify-center max-w-md w-full h-24 bg-white border-2 border-black rounded-md hover:bg-gray-100 hover:border-gray-300 cursor-pointer">
                        <img src="{{ asset('img/star-icon.png') }}" alt=""
                            class="absolute left-4 top-1/2 transform -translate-y-1/2 w-10 h-10">
                        <span class="text-4xl font-bold">Избранное</span>
                    </label>
                    <div class="addit-desc ml-10 text-2xl">
                        <p>С вами свяжутся наши сотрудники при добавлении авто в избранное </p>
                    </div>
                </a>
            @endif
        </div>
        <div class="recs my-10 mb-20">
            <div class="title text-center text-5xl font-bold mb-10">
                <h2>Возможно вам понравится</h2>
            </div>
            <ul class="grid grid-cols-3">
                @foreach ($random as $item)
                    <li>
                        <div class="max-w-md text-center font-bold text-2xl">
                            <a href="{{ route('OpenProduct', ['product_id' => $item->id]) }}">
                                <img src="{{ asset($item->photo) }}" alt=""
                                    class="w-full border-4 border-black rounded-md mb-3">
                                <p>{{ $item->name }}</p>
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
