@extends('layouts.main')
@section('content')

    <div class="header mt-[100px]">
        <div class="product-detail-container">
            <div class="product-images max-w-screen-xl flex flex-wrap items-center mx-auto">
                <div class="w-full">
                    <a class="p-2.5 bg-[#20acb4] text-white rounded-md shadow-md hover:bg-[rgb(26,137,143)]" href="{{ url()->previous() }}">Back</a>

                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12">
                    @if($product->images->isNotEmpty())
                    @foreach($product->images as $image)
                        <div>
                            <img style="object-fit: cover; /* Menjaga agar gambar tetap proporsional */
            display: block" class="h-[450px] w-[300px] rounded-lg ml-auto mr-auto" src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $product->name }}">
                        </div>
                    @endforeach
                    @else
                        <p>No images available</p>
                    @endif
                </div>

            </div>
            <div class="product-info max-w-screen-xl flex flex-wrap items-center mx-auto">
                <h1 class="text-2xl text-center font-semibold mt-6 mb-6 w-full text-gray-800">{{ $product->name }}</h1>
                <p class=" text-gray-700 mb-[6px]">{{ $product->desc }}</p>
                <div class="button flex justify-center w-full mt-10 mb-10">
                    <a class="p-2.5 bg-[#20acb4] text-white rounded-md shadow-md hover:bg-[rgb(26,137,143)]" href="{{$product->url }}">Pesan sekarang</a>
                </div>
            </div>
        </div>
    </div>

@endsection
