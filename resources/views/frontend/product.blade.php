@extends('layouts.main')
@section('content')

    <div class="banner mt-16" style="
        background-image: url('{{asset('img/banner-home.png')}}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <div class="text w-full">
                <div class="gap h-[200px]"></div>
                <h1 class="text-white text-5xl font-bold">#Catalog Kami</h1>
                <div class="gap h-[200px]"></div>
            </div>
        </div>
    </div>
    <div class="max-w-screen-xl flex flex-wrap items-center mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-[100px] ml-auto mr-auto">
            @foreach ($products as $item)
            <a href="{{route('catalog.show', $item->id)}}" class="bg-gray-100 rounded-2xl shadow-md">
                <h3 class="text-lg font-bold ml-2 mt-2 text-[#4372AE]">{{$item->name}}</h3>
                @if ($item->images->isNotEmpty())
                <img style="object-fit: cover; /* Menjaga agar gambar tetap proporsional */
    display: block" class="h-[450px] w-[300px] rounded-lg ml-auto mr-auto" src="{{ asset('storage/' . $item->images->first()->image_path) }}" alt="{{ $item->name }}">
                @else
                    <p>No image available</p>
                @endif

            </a>
            @endforeach

        </div>
    </div>
    <div class="h-[100px]"></div>

@endsection
