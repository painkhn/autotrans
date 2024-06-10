@extends('layouts.app')

@section('content')
    <div class="recs my-10 mb-20">
        <div class="title text-center text-5xl font-bold mb-10">
            <h2>Результаты поиска</h2>
        </div>
        <ul class="grid grid-cols-3 p-4">
            @if (count($positions) > 0)
                @foreach ($positions as $item)
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
            @else
                <div class="title text-center text-3xl font-bold mb-10">
                    <h3>Ничего не найдено</h3>
                </div>
            @endif
        </ul>
    </div>
@endsection
