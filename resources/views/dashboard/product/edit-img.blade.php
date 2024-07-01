@extends('dashboard.template.main')
@section('content')

    <div class="main mt-[100px]">
        <a href="{{route('product')}}" class="p-2.5 bg-blue-700 hover:bg-blue-400 text-white rounded-md shadow-md" >Back</a>
        <div class="content p-10 rounded-lg shadow-lg bg-gray-50 mt-5">
            <h2 class="text-2xl font-semibold ">Detail Gallery Product</h2>
            <div class="create w-full md:w-[50%] flex justify-end mt-6">
                @include('dashboard.product.create-img')
                <button data-modal-target="create-img" data-modal-toggle="create-img" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Tambah Gambar
                  </button>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-6">
                @foreach($product->images as $image)
                <div class="rounded-md shadow-md bg-white">
                    <ul class="flex">
                        <li class="mr-2">
                            <button data-modal-target="edit-img-{{$image->id}}" data-modal-toggle="edit-img-{{$image->id}}">
                                <svg class="w-6 h-6 text-blue-600 hover:text-blue-300 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M14 4.182A4.136 4.136 0 0 1 16.9 3c1.087 0 2.13.425 2.899 1.182A4.01 4.01 0 0 1 21 7.037c0 1.068-.43 2.092-1.194 2.849L18.5 11.214l-5.8-5.71 1.287-1.31.012-.012Zm-2.717 2.763L6.186 12.13l2.175 2.141 5.063-5.218-2.141-2.108Zm-6.25 6.886-1.98 5.849a.992.992 0 0 0 .245 1.026 1.03 1.03 0 0 0 1.043.242L10.282 19l-5.25-5.168Zm6.954 4.01 5.096-5.186-2.218-2.183-5.063 5.218 2.185 2.15Z" clip-rule="evenodd"/>
                                  </svg>
                              </button>
                        </li>
                        <li class="mr-2">
                            <form action="{{ route('images.destroy', $image->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger text-white delete-button">
                                    <svg class="w-6 h-6 text-blue-600 hover:text-blue-300 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                      </svg>
                                </button>
                            </form>
                        </li>
                    </ul>
                    <img style="object-fit: cover; /* Menjaga agar gambar tetap proporsional */
            display: block" class="h-[450px] w-[300px] rounded-lg ml-auto mr-auto" src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $product->name }}" alt="">
                </div>
                @include('dashboard.product.upload-img')
                @endforeach

            </div>

        </div>


    </div>

@endsection
