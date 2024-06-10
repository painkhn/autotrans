@extends('layouts.app')

@section('content')
    <div class="max-w-1774px w-full h-auto mx-auto my-10">
        <div class="title font-bold text-5xl mb-8">
            <h2>Продажа: Hyundai Santa Fe 2019 год</h2>
        </div>
        <div class="flex mb-8">
            <img src="../src/img/auto-1.png" alt="" class="max-w-3xl w-full h-auto border-4 border-black rounded-xl">
            <div class="list ml-8">
                <ul class="font-semibold">
                    <li class="text-4xl">
                        <p>Цена: <span>1 300 000 RUB</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Двигатель: <span>дизель 2.2 л</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Мощность: <span>200 л.с.</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Поколение: <span>2-ое</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Коробка передач: <span>АКПП</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Привод: <span>4WD</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Цвет: <span>чёрный</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Руль: <span>левый</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Страна производства: <span>Корея</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Комплектация: <span>2.2d AT 4WD</span></p>
                    </li>
                    <li class="text-4xl">
                        <p>Поколение: <span>4-ое</span></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="addit max-w-1588px w-full">
            <div class="title font-semibold text-4xl mb-5">
                <p>Дополнительно</p>
            </div>
            <div class="desc font-semibold text-4xl pl-8 mb-5">
                <p>Мы оказываем полное сопровождение сделки даем ГАРАНТИЮ НА АВТО 2 года или 100 000 км – выбираете
                    вы!
                    Весь в заводском окрасе. Реальный пробег, не смотан по вину легко проверить.</p>
            </div>
            <form class="addit-btn flex items-center">
                <label for="addit"
                    class="relative flex items-center justify-center max-w-md w-full h-24 bg-white border-2 border-black rounded-md hover:bg-gray-100 hover:border-gray-300 cursor-pointer">
                    <img src="../src/img/star-icon.png" alt=""
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 w-10 h-10">
                    <span class="text-4xl font-bold">Избранное</span>
                </label>
                <div class="addit-desc ml-10 text-2xl">
                    <p>С вами свяжутся наши сотрудники при добавлении авто в избранное </p>
                </div>
            </form>
        </div>
        <div class="recs my-10 mb-20">
            <div class="title text-center text-5xl font-bold mb-10">
                <h2>Возможно вам понравится</h2>
            </div>
            <ul class="grid grid-cols-3">
                <li>
                    <div class="max-w-md text-center font-bold text-2xl">
                        <a href="#!">
                            <img src="../src/img/auto-1.png" alt=""
                                class="w-full border-4 border-black rounded-md mb-3">
                            Hyundai Santa Fe 2019 год
                        </a>
                    </div>
                </li>
                <li>
                    <div class="max-w-md text-center font-bold text-2xl">
                        <a href="#!">
                            <img src="../src/img/auto-1.png" alt=""
                                class="w-full border-4 border-black rounded-md mb-3">
                            Hyundai Santa Fe 2019 год
                        </a>
                    </div>
                </li>
                <li>
                    <div class="max-w-md text-center font-bold text-2xl">
                        <a href="#!">
                            <img src="../src/img/auto-1.png" alt=""
                                class="w-full border-4 border-black rounded-md mb-3">
                            Hyundai Santa Fe 2019 год
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
