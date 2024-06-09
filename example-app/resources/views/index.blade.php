@extends('layouts.app')

@section('content')
    <div class="mb-96">
        <div class="main-bg pt-10 mb-9">
            <div class="grid grid-rows-3 h-full max-w-1654px mx-auto my-0">
                <div class="title text-center text-6xl font-bold">
                    <h1>Привезём Любое авто из Китая, Кореи и Японии</h1>
                </div>
                <div class="max-w-2xl">
                    <div class="title text-left text-5xl font-bold mb-3">
                        <h2>Выгодный Trade-in вашего авто</h2>
                    </div>
                    <div class="text-3xl font-bold row-span-2">
                        <p>Получите более высокую оценку на ваше авто у наших экспертов по заявке обмена</p>
                    </div>
                </div>
                <div class="btn">
                    @guest
                        <a href="{{ route('register') }}">
                            <button
                                class="max-w-md w-full h-24 bg-white rounded-lg text-3xl hover:border-2 hover:border-black">Зарегистрироваться</button>
                        </a>
                    @else
                        <a href="{{ route('profile') }}">
                            <button
                                class="max-w-md w-full h-24 bg-white rounded-lg text-3xl hover:border-2 hover:border-black">Личный
                                кабинет</button>
                        </a>
                    @endguest
                </div>
            </div>
        </div>
        <!-- блоки с преимуществами -->
        <div class="grid grid-cols-3 max-w-1588px w-full h-auto mx-auto my-0 gap-10 mb-9">
            <div
                class="info-block min-w-md max-w-xl h-40 flex items-center justify-center text-4xl border-4 border-black rounded-2xl px-5">
                <p>Белое таможенное оформления</p>
                <img src="{{ asset('img/info-icon-1.png') }}" alt="">
            </div>
            <div
                class="info-block min-w-md max-w-xl h-40 flex items-center justify-center text-4xl border-4 border-black rounded-2xl px-5">
                <p>Гарантия тех. исправности</p>
                <img src="{{ asset('img/info-icon-2.png') }}" alt="">
            </div>
            <div
                class="info-block min-w-md max-w-xl h-40 flex items-center justify-center text-4xl border-4 border-black rounded-2xl px-5">
                <p>Фиксированный срок доставки</p>
                <img src="{{ asset('img/info-icon-3.png') }}" alt="">
            </div>
        </div>
        <!-- страны -->
        <div class="title text-center font-bold text-5xl mb-12">
            <h2>Страна заказа автомобиля</h2>
        </div>
        <div class="countries grid grid-cols-3 max-w-1774px w-full h-auto mx-auto my-0 mb-20">
            <div class="country-block text-center max-w-500px w-full font-bold justify-self-start">
                <a href="pages/category_page.html" class="text-3xl">
                    <img src="{{ asset('img/japan.png') }}" alt=""
                        class="max-w-500px w-full rounded-2xl border-2 border-black mb-8">
                    Япония
                </a>
            </div>
            <div class="country-block text-center max-w-500px w-full font-bold justify-self-center">
                <a href="#!" class="text-3xl">
                    <img src="{{ asset('img/kr.png') }}" alt=""
                        class="max-w-500px w-full rounded-2xl border-2 border-black mb-8">
                    Корея
                </a>
            </div>
            <div class="country-block text-center max-w-500px w-full font-bold justify-self-end">
                <a href="#!" class="text-3xl">
                    <img src="{{ asset('img/china.png') }}" alt=""
                        class="max-w-500px w-full rounded-2xl border-2 border-black mb-8">
                    Китай
                </a>
            </div>
        </div>
        <!-- блок инфы о качестве -->
        <div class="quality w-full max-w-1774px mx-auto my-0 mb-10">
            <div class="grid grid-cols-10 gap-8 mb-8">
                <div class="col-span-6 w-full text-3xl border-4 border-black rounded-2xl p-8 font-bold">
                    <div class="flex items-center mb-3">
                        <img src="{{ asset('img/like-icon.png') }}" alt="">
                        <p class="font-bold text-5xl ml-3">Качество</p>
                    </div>
                    <div class="desc">
                        <p>Берем не количеством, а качеством! И чтобы добиться результата мы не берем много клиентов
                            в работу и работаем индивидуально с каждым, поэтому 24/7 на связи!</p>
                    </div>
                </div>
                <div class="col-span-4 w-full">
                    <img class="h-full border-4 border-black rounded-2xl" src="{{ asset('img/quality-img-1.png') }}"
                        alt="">
                </div>
            </div>
            <div class="grid grid-cols-10 gap-8">
                <div class="col-span-4 w-full">
                    <img class="h-full border-4 border-black rounded-2xl" src="{{ asset('img/quality-img-2.png') }}"
                        alt="">
                </div>
                <div class="col-span-6 w-full text-3xl border-4 border-black rounded-2xl p-8 font-bold">
                    <div class="flex items-center mb-3">
                        <img src="{{ asset('img/protect-icon.png') }}" alt="">
                        <p class="font-bold text-5xl ml-3">Гарантия и скорость</p>
                    </div>
                    <div class="desc">
                        <p>Работаем исключительно по договору, прописываем все условия и не нарушаем их во время
                            работы. Так как мы работаем напрямую с каждой страной вы будете моментально получать
                            информацию.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- форма отправки вопроса -->
        <div class="w-full h-765px relative">
            <div class="question w-full max-w-1774px mx-auto my-0">
                <div class="title text-center font-bold text-5xl mb-12">
                    <h2>Вопросы</h2>
                </div>
                <div class="border-4 border-black rounded-2xl w-full px-14 py-8 h-765px">
                    <div class="title font-bold text-6xl mb-5">
                        <h2>Остались вопросы?</h2>
                    </div>
                    <div class="desc font-bold text-5xl mb-10">
                        <p>Задай их, ответ будет в течении 1-го часа</p>
                    </div>
                    <form class="mb-10">
                        <div class="input mb-9">
                            <input type="text" name="" id=""
                                class="w-2/3 h-24 border-4 border-black rounded-2xl px-10 text-4xl">
                        </div>
                        <div class="submit">
                            <input type="submit" value="Отправить"
                                class="font-bold text-4xl border-4 border-black py-5 px-20 rounded-2xl">
                        </div>
                    </form>
                    <div class="question-img absolute w-full left-0 bottom-minus mb-20">
                        <img src="{{ asset('img/question-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
