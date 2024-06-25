@extends('layouts.app')

@section('content')
    <div class="h-main">
        <!-- категори инфо -->
        <div class="py-10">
            <div class="title text-5xl font-bold text-center mb-10">
                <h2>Бренды в категории</h2>
            </div>
        </div>
        @if ($category->id == 1)
            <div class="category-info flex justify-between items-center max-w-1654px mx-auto my-0 mb-20">
                <div class="country text-center max-w-80">
                    <img src="{{ asset('img/japan.png') }}" alt=""
                        class="max-w-80 border-2 border-black rounded-2xl mb-5">
                    <p class="text-2xl font-bold">Японское авто</p>
                </div>
                <ul class="marks grid grid-cols-6 grid-rows-2 gap-x-32 gap-y-10">
                    <li class="mark text-center">
                        <img src="{{ asset('img/honda.png') }}" alt="" class="max-w-20 w-full mx-auto my-0 h-20">
                        <p class="font-bold">Honda</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/mazda.png') }}" alt="" class="max-w-20 w-full mx-auto my-0 h-20">
                        <p class="font-bold">Mazda</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/suzuki.png') }}" alt="" class="max-w-20 w-full mx-auto my-0 h-20">
                        <p class="font-bold">Suzuki</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/lexus.png') }}" alt="" class="max-w-20 w-full mx-auto my-0 h-20">
                        <p class="font-bold">Lexus</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/nissan.png') }}" alt="" class="max-w-20 w-full mx-auto my-0 h-20">
                        <p class="font-bold">Nissan</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/subaru.png') }}" alt="" class="max-w-20 w-full mx-auto my-0 h-20">
                        <p class="font-bold">subaru</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/mitsubishi.png') }}" alt=""
                            class="max-w-20 w-full mx-auto my-0 h-20">
                        <p class="font-bold">mitsubishi</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/hino.png') }}" alt="" class="max-w-20 w-full mx-auto my-0 h-20">
                        <p class="font-bold">Hino</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/toyota.png') }}" alt="" class="max-w-20 w-full mx-auto my-0 h-20">
                        <p class="font-bold">toyota</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/infiniti.png') }}" alt=""
                            class="max-w-20 w-full mx-auto my-0 h-20">
                        <p class="font-bold">Honda</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/acura.png') }}" alt="" class="max-w-20 w-full mx-auto my-0 h-20">
                        <p class="font-bold">acura</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/acura.png') }}" alt="" class="max-w-20 w-full h-20 mx-auto my-0">
                        <p class="font-bold">Honda</p>
                    </li>
                </ul>
            </div>
        @elseif ($category->id == 2)
            <div class="category-info flex justify-between items-center max-w-1654px mx-auto my-0 mb-20">
                <div class="country text-center max-w-80">
                    <img src="{{ asset('img/kr.png') }}" alt=""
                        class="max-w-80 border-2 border-black rounded-2xl mb-5">
                    <p class="text-2xl font-bold">Корейское авто</p>
                </div>
                <ul class="marks grid grid-cols-5 gap-x-14">
                    <li class="mark text-center">
                        <img src="{{ asset('img/kia.png') }}" alt="" class="max-w-52 w-full mx-auto my-0 h-24">
                        <p class="font-bold">Kia</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/hyndai.png') }}" alt="" class="max-w-52 w-full mx-auto my-0 h-24">
                        <p class="font-bold">hyndai</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/daewoo.png') }}" alt="" class="max-w-52 w-full mx-auto my-0 h-24">
                        <p class="font-bold">Daewoo</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/ssang_yong.png') }}" alt=""
                            class="max-w-52 w-full mx-auto my-0 h-24">
                        <p class="font-bold">Ssang Yong</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/genesis.png') }}" alt=""
                            class="max-w-52 w-full mx-auto my-0 h-24">
                        <p class="font-bold">genesis</p>
                    </li>
                </ul>
            </div>
        @elseif ($category->id == 3)
            <div class="category-info flex justify-between items-center max-w-1654px mx-auto my-0 mb-20">
                <div class="country text-center max-w-80">
                    <img src="{{ asset('img/china.png') }}" alt=""
                        class="max-w-80 border-2 border-black rounded-2xl mb-5">
                    <p class="text-2xl font-bold">Китайское авто</p>
                </div>
                <ul class="marks grid grid-cols-5 gap-x-14">
                    <li class="mark text-center">
                        <img src="{{ asset('img/geely.png') }}" alt=""
                            class="max-w-52 w-full mx-auto my-0 h-24">
                        <p class="font-bold">geely</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/cherry.png') }}" alt=""
                            class="max-w-52 w-full mx-auto my-0 h-24">
                        <p class="font-bold">cherry</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/li_auto.png') }}" alt=""
                            class="max-w-52 w-full mx-auto my-0 h-24">
                        <p class="font-bold">LI AUTO</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/changan.png') }}" alt=""
                            class="max-w-52 w-full mx-auto my-0 h-24">
                        <p class="font-bold">CHANGAN</p>
                    </li>
                    <li class="mark text-center">
                        <img src="{{ asset('img/omoda.png') }}" alt=""
                            class="max-w-52 w-full mx-auto my-0 h-24">
                        <p class="font-bold">OMODA</p>
                    </li>
                </ul>
            </div>
        @endif

        <div class="title text-5xl font-bold text-center mb-20">
            <h2>Автомобили в наличии</h2>
        </div>
        <ul class="max-w-1774px mx-auto my-0">
            @foreach ($category->products as $item)
                <li class="mb-20">
                    <div class="auto-block flex items-center">
                        <div class="auto-img">
                            <img src="{{ asset($item->photo) }}" alt=""
                                class="max-w-xl w-full border-4 border-black rounded-2xl">
                        </div>
                        <div class="ml-10">
                            <div class="title text-5xl font-bold mb-10">
                                <h2>{{ $item->name }}</h2>
                            </div>
                            <div class="list">
                                <ul>
                                    <li class="text-4xl font-bold">
                                        <p>Цена: <span>{{ $item->price }}</span></p>
                                    </li>
                                    <li class="text-4xl font-bold">
                                        <p>Комплектация: <span>{{ $item->equipment }}</span></p>
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
                                    <li>
                                        <a href="{{ route('OpenProduct', ['product_id' => $item->id]) }}">
                                            <button
                                                class="max-w-md w-full h-14 border-2 border-black rounded-md hover:text-white hover:bg-black text-2xl">Редактировать</button>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('DelProduct', ['product_id' => $item->id]) }}">
                                            <button
                                                class="max-w-md w-full h-14 border-2 border-black rounded-md hover:text-white hover:bg-black text-2xl bg-red-500">Удалить</button>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    @endsection
