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
            <div class="text w-[50%]">
                <div class="gap h-[200px]"></div>
                <h1 class="text-white text-5xl font-bold">KUALITAS BAHAN PREMIUM TERBAIK</h1>
                <div class="h-[30px]"></div>
                <h3 class="text-white text-lg">Kami memberikan solusi untuk kebutuhan seluruh customer dalam pemilihan bahan yang terbaik agar dapat digunakan senyaman mungkin dalam digunakan pada saat aktifitas olahraga.</h3>
                <div class="h-[50px]"></div>
                <a href="{{route('contact')}}" class="p-2.5 bg-[#20acb4] text-white rounded-md shadow-md hover:bg-[rgb(26,137,143)]">Hubungi Kami</a>
                <div class="gap h-[200px]"></div>
            </div>
            <div class="blank w-[50%] md:w-full">

            </div>
        </div>
    </div>
    <div class="bg-[#eeeeee] pb-[100px]">
        <div class="content-1 max-w-screen-xl flex flex-wrap items-center mx-auto pt-[100px]">
            <h2 class="text-2xl font-bold text-[#4372AE] w-full text-center"><i>“Ekspresikan jerseymu dengan kualitas terbaik”</i></h2>
            <p class="text-center text-lg pt-3">Ekspresikan kreativitasmu melalui desain jersey yang unik, dengan jaminan <b>kualitas terbaik</b> yang menghadirkan kebanggaan dalam setiap jahitan. Setiap jersey merupakan cerminan dari identitasmu yang sesungguhnya, dihasilkan dengan teliti dan dengan perhatian terhadap <b>detail yang sempurna.</b> </p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-[100px] ml-auto mr-auto">
                <div class="bg-gray-100 rounded-lg p-10 shadow-sm">
                    <img class="h-[200px] w-[200px] rounded-lg ml-auto mr-auto" src="{{URL::asset('img/computer.png')}}" alt="">
                    <h3 class="text-lg font-bold text-center mt-6 text-[#4372AE]">Custom Design</h3>
                    <p class="mt-3 text-center">Berikan desain yang unik dan sesuai keinginan Anda</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-10 shadow-sm">
                    <img class="h-[200px] w-[200px] rounded-lg ml-auto mr-auto" src="{{URL::asset('img/jam.png')}}" alt="">
                    <h3 class="text-lg font-bold text-center mt-6 text-[#4372AE]">Jaminan Tepat Waktu</h3>
                    <p class="mt-3 text-center">Pesanan sesuai dengan estimasi waktu dibuat</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-10 shadow-sm">
                    <img class="h-[200px] w-[200px] rounded-lg ml-auto mr-auto" src="{{URL::asset('img/jersey.png')}}" alt="">
                    <h3 class="text-lg font-bold text-center mt-6 text-[#4372AE]">Produk Berkualitas</h3>
                    <p class="mt-3 text-center">Produk jersey yang berkualitas</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-10 shadow-sm">
                    <img class="h-[200px] w-[200px] rounded-lg ml-auto mr-auto" src="{{URL::asset('img/promo.png')}}" alt="">
                    <h3 class="text-lg font-bold text-center mt-6 text-[#4372AE]">Harga Terjangkau</h3>
                    <p class="mt-3 text-center">Harga produk yang terjangkau</p>
                </div>
            </div>
        </div>
    </div>



    <div class="prod pb-[100px] pt-[100px] bg-[#d9e3ef]">
        <div class="max-w-screen-xl flex flex-wrap items-center mx-auto mb-10">
            <h2 class="text-2xl font-bold text-[#132d4d] w-full text-center"> Catalog</h2>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-[100px] ml-auto mr-auto">
                @foreach ($products as $item)
                    <a href="{{route('catalog.show', $item->id)}}" class="bg-gray-100 rounded-2xl shadow-2xl">
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

            <div class="button flex justify-center">
                <a href="{{route('catalog')}}" class="p-2.5 bg-[#20acb4] text-white rounded-md shadow-md hover:bg-[rgb(26,137,143)]">Lihat Selengkapnya</a>
            </div>



    </div>

    <div class="banner pb-[100px] pt-[100px] bg-[#eeeeee]">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <div class="banner-img w-[50%]">
                <img src="{{URL::asset('img/banner.png')}}" alt="" class="w-[500px] h-[500px]">
            </div>
            <div class="content-banner w-[50%]">
                <h2 class="text-3xl font-bold mb-6">BUAT DESIGN JERSEY MU SENDIRI</h2>
                <p >Buat jersey Anda sendiri dengan desain yang Anda inginkan! Dari pilihan bahan berkualitas tinggi hingga teknologi cetak terbaru. Ekspresikan kreativitas Anda secara penuh, berikan tim Anda tampilan yang unik dan penuh semangat di lapangan.</p>
            </div>
        </div>

        <div class="max-w-screen-xl flex flex-wrap items-center mx-auto mt-100 mb-100">

            <h2 class="text-center w-full text-2xl font-bold text-[#132d4d] mb-[50px]">Hal yang sering ditanyakan</h2>

            <div id="accordion-collapse" data-accordion="collapse" class="w-full">
                <h2 id="accordion-collapse-heading-1">
                <button type="button" class="w-full flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span>Apa ada minimal order?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                    <p class="text-gray-700 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                <button type="button" class="w-full flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span>Berapa harga jersey printing?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                    <p class="text-gray-700 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                </div>
                </div>
                <h2 id="accordion-collapse-heading-3">
                <button type="button" class="w-full flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span>Pesan banyak dapat diskon?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-700 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Learn more about these technologies:</p>
                </div>
                </div>
                <h2 id="accordion-collapse-heading-4">
                <button type="button" class="w-full flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                    <span>Jersey dari bahan apa sih?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-700 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Learn more about these technologies:</p>
                </div>
                </div>
                <h2 id="accordion-collapse-heading-5">
                <button type="button" class="w-full flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                    <span>Pakai printing apa?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-700 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Learn more about these technologies:</p>
                </div>
                </div>
                <h2 id="accordion-collapse-heading-6">
                <button type="button" class="w-full flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-6" aria-expanded="false" aria-controls="accordion-collapse-body-6">
                    <span>Bisa kirim ke seluruh indonesia?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-700 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">Learn more about these technologies:</p>
                </div>
                </div>
            </div>


         </div>

        </div>

        <div class="bg-[#eeeeee] pt-100">

            <div class="max-w-screen-xl flex flex-wrap items-center mx-auto">
                <div class="content w-full rounded-lg p-10 shadow-md bg-[#4573ad]">
                    <h2 class="text-2xl font-bold text-white mb-4">Tertarik dengan produk kami ?</h2>
                    <p class="text-white mb-6">Anda dapat menghubungi kami melalui tombol dibawah ini</p>
                    <a href="{{route('contact')}}" class="p-2.5 bg-[#20acb4] text-white rounded-md shadow-md hover:bg-[rgb(26,137,143)]">Hubungi Kami</a>
                </div>
            </div>
        </div>

    </div>




@endsection
