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
        <div class="max-w-screen-xl flex flex-wrap items-center mx-auto">
            <div class="text w-full">
                <div class="gap h-[200px]"></div>
                <h1 class="text-white text-5xl font-bold">#Tentang Kami</h1>
                <div class="gap h-[200px]"></div>
            </div>
            <div class="blank w-[50%] md:w-full">

            </div>
        </div>
    </div>

    <div class="content-1 max-w-screen-xl flex flex-wrap items-center mx-auto">
        <div class="h-[100px]"></div>
        <div class="flex justify-between">
            <div class="img w-full md:w-[40%]">
                <img src="{{URL::asset('img/logo.png')}}" class="w-[500px]" alt="">
            </div>
            <div class="w-full md:w-[60%]">
                <h2 class="text-3xl font-bold text-[#4372AE] mb-4"><i>Sablonin</i></h2>
                <p class="text-lg">Selamat datang di Sablonin, penyedia layanan pembuatan jersey terkemuka yang didedikasikan untuk memenuhi kebutuhan atlet dan tim olahraga dengan produk berkualitas tinggi dan desain inovatif. Berdiri sejak 2024, kami telah berkembang menjadi pilihan utama bagi banyak klub, sekolah, dan komunitas olahraga di seluruh negeri.
                    Siapa Kami?

                    Kami adalah tim profesional yang berpengalaman dalam desain dan produksi jersey. Dengan keahlian mendalam dan komitmen terhadap kualitas, kami memastikan setiap jersey yang kami buat tidak hanya nyaman dipakai tetapi juga memberikan tampilan yang profesional dan menarik. Kami percaya bahwa jersey bukan hanya pakaian olahraga, tetapi juga identitas dan kebanggaan tim. </p>
            </div>
        </div>

        <div class="h-[100px]"></div>

        <div class="keunggulan mb-[100px]">
            <h2 class="text-center text-2xl font-bold mb-[50px]">Keunggulan Kami</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 ml-auto mr-auto">
                <div class="bg-gray-100 rounded-lg p-10 shadow-lg">
                    <img class="h-[200px] w-[200px] rounded-lg ml-auto mr-auto" src="{{URL::asset('img/computer.png')}}" alt="">
                    <h3 class="text-lg font-bold text-center mt-6 text-[#4372AE]">Custom Design</h3>
                    <p class="mt-3 text-center">Berikan desain yang unik dan sesuai keinginan Anda</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-10 shadow-lg">
                    <img class="h-[200px] w-[200px] rounded-lg ml-auto mr-auto" src="{{URL::asset('img/jam.png')}}" alt="">
                    <h3 class="text-lg font-bold text-center mt-6 text-[#4372AE]">Jaminan Tepat Waktu</h3>
                    <p class="mt-3 text-center">Pesanan sesuai dengan estimasi waktu dibuat</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-10 shadow-lg">
                    <img class="h-[200px] w-[200px] rounded-lg ml-auto mr-auto" src="{{URL::asset('img/jersey.png')}}" alt="">
                    <h3 class="text-lg font-bold text-center mt-6 text-[#4372AE]">Produk Berkualitas</h3>
                    <p class="mt-3 text-center">Produk jersey yang berkualitas</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-10 shadow-lg">
                    <img class="h-[200px] w-[200px] rounded-lg ml-auto mr-auto" src="{{URL::asset('img/promo.png')}}" alt="">
                    <h3 class="text-lg font-bold text-center mt-6 text-[#4372AE]">Harga Terjangkau</h3>
                    <p class="mt-3 text-center">Harga produk yang terjangkau</p>
                </div>
            </div>
        </div>
    </div>

    <div class="contact max-w-screen-xl flex flex-wrap items-center mx-auto mb-[100px]">
        <div class="content bg-[#4572ae] rounded-lg shadow-md p-10 w-full">
            <h2 class="text-white text-2xl font-bold">Ingin Konsultasi Dengan Kami ?</h2>
            <p class="text-white font-lg mt-4 mb-6">Hubungi kami melalui tombol dibawah ini untuk mengetahui lebih lanjut.</p>
            <a class="p-2.5 bg-[#20acb4] text-white rounded-md shadow-md hover:bg-[rgb(26,137,143)]">Hubungi Kami</a>
        </div>
    </div>

@endsection
