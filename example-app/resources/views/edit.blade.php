@extends('layouts.app')

@section('content')
    <div class="h-main max-w-1774px w-full mx-auto my-10">
        <div class="add_auto pt-10">
            <form class="flex justify-between" action="{{ route('SaveEditProduct', ['product_id' => $product->id]) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <ul class="w-1/2 pr-10">
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Название</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="name" value="{{ $product->name }}">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Цена</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="price" value="{{ $product->price }}">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Двигатель (топливо и объём)</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="engine" value="{{ $product->engine }}">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Мощность (л.с.)</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="power" value="{{ $product->power }}">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Коробка передач</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="transmission" value="{{ $product->transmission }}">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Привод (ведущая ось)</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="drive" value="{{ $product->drive }}">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Цвет</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="color" value="{{ $product->color }}">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Руль (сторона)</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="rudder" value="{{ $product->rudder }}">
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
                            name="equipment" value="{{ $product->equipment }}">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Поколение</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="generation" value="{{ $product->generation }}">
                    </li>
                    <li class="mb-5">
                        <div class="label mb-2 font-semibold text-xl">
                            <label>Дополнителная информация</label>
                        </div>
                        <input type="text" class="border-2 border-black w-full h-12 rounded-md px-4 text-xl"
                            name="description" value="{{ $product->description }}">
                    </li>
                    <li class="mb-5">
                        <div class="submit">
                            <input type="submit" value="СОХРАНИТЬ"
                                class="w-full h-24 border-2 border-black rounded-xl text-2xl hover:underline hover:shadow-xl hover:shadow-gray-300 transition-all">
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
@endsection
