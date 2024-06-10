<header>
    <!-- надо адаптировать -->
    <div class="grid grid-cols-3 w-full px-24 min-h-44 relative">
        <!-- форма поиска -->
        <div class="search justify-self-start self-center w-full">
            <form class="flex items-center">
                <input type="search" name="" id="" placeholder="Поиск"
                    class="border border-black rounded-md h-12 px-4 max-w-sm w-full">
                <button type="submit" class="border-none w-7 h-7 ml-2">
                    <img src="{{ asset('img/search-icon.svg') }}" alt="" class="w-7 h-7">
                </button>
            </form>
        </div>
        <!-- лого -->
        <div class="logo justify-self-center self-center">
            <a href="{{ route('index') }}">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </a>
        </div>
        <!-- навигация -->
        <nav class="justify-self-end self-center ">
            <ul class="flex text-xl">
                <li>
                    <button onclick="showModal()">
                        Каталог
                    </button>
                </li>
                <li>
                    <div id="modal"
                        class="hidden modal absolute max-w-md w-full -bottom-40 right-20 border-4 border-black rounded-2xl bg-white p-5">
                        <ul>
                            <li class="mb-5"><a href="{{ route('catalog', ['category_name' => 'Japan']) }}">Японские
                                    авто</a></li>
                            <li class="mb-5"><a href="{{ route('catalog', ['category_name' => 'Korea']) }}">Корейские
                                    авто</a></li>
                            <li class="mb-5"><a href="{{ route('catalog', ['category_name' => 'China']) }}">Китайские
                                    авто</a></li>
                            <li>
                                <button class="text-sm hover:underline" onclick="closeModal()">
                                    Закрыть
                                </button>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a href="{{ route('profile') }}" class="ml-14 flex">
                        Личный кабинет
                        <img class="ml-3" src="{{ asset('img/login-icon.png') }}" alt="">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
