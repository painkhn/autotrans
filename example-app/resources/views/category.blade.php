@extends('layouts.app')

@section('content')
    <div class="h-main">
        <!-- категори инфо -->
        <div class="py-10">
            <div class="title text-5xl font-bold text-center mb-10">
                <h2>Бренды в категории</h2>
            </div>
        </div>
        <div class="category-info flex justify-between items-center max-w-1654px mx-auto my-0 mb-20">
            <div class="country text-center max-w-80">
                <img src="{{ asset('img/japan.png') }}" alt="" class="max-w-80 border-2 border-black rounded-2xl mb-5">
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
                    <img src="{{ asset('img/mitsubishi.png') }}" alt="" class="max-w-20 w-full mx-auto my-0 h-20">
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
                    <img src="{{ asset('img/infiniti.png') }}" alt="" class="max-w-20 w-full mx-auto my-0 h-20">
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
    @endsection
