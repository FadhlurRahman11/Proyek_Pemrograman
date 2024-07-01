@extends('dashboard.template.main')
@section('content')

    <div class="main mt-[100px]">
        <a href="{{route('product')}}" class="p-2.5 bg-blue-700 hover:bg-blue-400 text-white rounded-md shadow-md" >Back</a>
        <div class="content p-10 rounded-lg shadow-lg bg-gray-50 mt-5">
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->name}}" readonly />
            </div>
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Produk</label>
                <textarea name="desc" id="desc" cols="30" rows="10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$product->desc}}</textarea>
            </div>
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Produk</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$product->url}}" readonly />
            </div>
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Produk</label>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12">
                    @foreach($product->images as $image)
                    <div class="rounded-md shadow-md bg-white">
                        <img style="object-fit: cover; /* Menjaga agar gambar tetap proporsional */
                display: block" class="h-[350px] w-[200px] rounded-lg ml-auto mr-auto" src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $product->name }}" alt="">
                    </div>
                    @endforeach

                </div>
            </div>
        </div>


    </div>

@endsection
