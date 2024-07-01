
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
                <h1 class="text-white text-5xl font-bold">#Kebijakan Privasi</h1>
                <div class="gap h-[200px]"></div>
            </div>
            <div class="blank w-[50%] md:w-full">

            </div>
        </div>
    </div>

    <div class="content-1 max-w-screen-xl md:flex md:flex-wrap md:items-center mx-auto">
        <div class="h-[100px]"></div>
            <section>
                <p class="">
                    Kami di Sablonin sangat menghargai privasi Anda dan berkomitmen untuk melindungi informasi pribadi Anda. Kebijakan privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi Anda saat Anda mengunjungi situs web kami dan menggunakan layanan kami.
                </p>
            </section>

            <section class="md:ml-3">
                <h2 class="text-lg md:mb-2 md:mt-2">1. Informasi yang Kami Kumpulkan</h2>
                <p class="md:ml-8">
                    Kami mengumpulkan berbagai jenis informasi untuk memberikan dan meningkatkan layanan kami kepada Anda:
                </p>
                <ul class="md:ml-3">
                    <li class="md:ml-10"><strong>Informasi Pribadi:</strong> Nama, alamat email, nomor telepon, dan alamat fisik Anda ketika Anda membuat akun, melakukan pemesanan, atau berkomunikasi dengan kami.</li>
                    <li class="md:ml-10"><strong>Informasi Penggunaan:</strong> Data tentang bagaimana Anda menggunakan situs web kami, termasuk halaman yang Anda kunjungi, waktu yang Anda habiskan di situs kami, dan informasi lain yang dapat membantu kami meningkatkan pengalaman pengguna Anda.</li>
                    <li class="md:ml-10"><strong>Informasi Transaksi:</strong> Detail tentang pembelian Anda, termasuk informasi pembayaran dan alamat pengiriman.</li>
                    <li class="md:ml-10"><strong>Cookies:</strong> Kami menggunakan cookies untuk mengumpulkan informasi tentang aktivitas online Anda di situs kami untuk mempersonalisasi pengalaman Anda dan meningkatkan layanan kami.</li>
                </ul>
            </section>

            <section class="md:ml-3">
                <h2 class="text-lg md:mb-2 md:mt-2">2. Penggunaan Informasi</h2>
                <p class="md:ml-8">
                    Kami menggunakan informasi yang kami kumpulkan untuk berbagai tujuan, termasuk tetapi tidak terbatas pada:
                </p>
                <ul class="md:ml-3">
                    <li class="md:ml-10"><strong>Memproses dan mengelola pesanan Anda:</strong> Mengirimkan produk yang Anda pesan dan memberikan layanan pelanggan.</li>
                    <li class="md:ml-10"><strong>Personalisasi pengalaman Anda:</strong> Memberikan konten dan rekomendasi yang relevan berdasarkan preferensi Anda.</li>
                    <li class="md:ml-10"><strong>Meningkatkan situs web kami:</strong> Menganalisis data penggunaan untuk memahami bagaimana pengguna berinteraksi dengan situs kami dan mengidentifikasi area yang perlu perbaikan.</li>
                    <li class="md:ml-10"><strong>Komunikasi:</strong> Mengirimkan informasi terkait pesanan Anda, promosi, pembaruan produk, dan layanan pelanggan.</li>
                    <li class="md:ml-10"><strong>Keamanan:</strong> Melindungi akun Anda dan mencegah aktivitas penipuan.</li>
                </ul>
            </section>

            <section class="md:ml-3">
                <h2 class="text-lg md:mb-2 md:mt-2">3. Berbagi Informasi</h2>
                <p class="md:ml-8">
                    Kami tidak menjual, menyewakan, atau memperdagangkan informasi pribadi Anda kepada pihak ketiga. Kami hanya akan berbagi informasi Anda dengan pihak ketiga dalam keadaan berikut:
                </p>
                <ul class="md:ml-3">
                    <li class="md:ml-10"><strong>Layanan Pihak Ketiga:</strong> Kami bekerja dengan pihak ketiga yang menyediakan layanan atas nama kami, seperti pengiriman, pemrosesan pembayaran, dan analisis data. Pihak ketiga ini hanya memiliki akses ke informasi yang diperlukan untuk melaksanakan tugas mereka dan diharuskan untuk menjaga kerahasiaan informasi Anda.</li>
                    <li class="md:ml-10"><strong>Kepatuhan Hukum:</strong> Kami dapat mengungkapkan informasi Anda jika diperlukan oleh hukum atau jika kami percaya bahwa pengungkapan tersebut diperlukan untuk melindungi hak kami, mematuhi proses hukum, atau menanggapi permintaan pemerintah.</li>
                </ul>
            </section>

            <section class="md:ml-3">
                <h2 class="text-lg md:mb-2 md:mt-2">4. Keamanan Informasi</h2>
                <p class="md:ml-8">
                    Kami mengambil langkah-langkah keamanan yang wajar untuk melindungi informasi pribadi Anda dari akses yang tidak sah, penggunaan, pengungkapan, atau penghancuran. Namun, harap diingat bahwa tidak ada metode transmisi data melalui internet atau metode penyimpanan elektronik yang 100% aman.
                </p>
            </section>

            <section class="md:ml-3">
                <h2 class="text-lg md:mb-2 md:mt-2">5. Hak Anda</h2>
                <p class="md:ml-8">
                    Anda memiliki hak untuk mengakses, mengoreksi, atau menghapus informasi pribadi Anda yang kami miliki. Jika Anda ingin mengajukan permintaan tersebut, silakan hubungi kami melalui informasi kontak yang tersedia di situs web kami.
                </p>
            </section>

            <section class="md:ml-3">
                <h2 class="text-lg md:mb-2 md:mt-2">6. Perubahan pada Kebijakan Privasi</h2>
                <p class="md:ml-8">
                    Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Setiap perubahan yang kami lakukan akan diumumkan di halaman ini, dan kami mendorong Anda untuk secara berkala meninjau kebijakan privasi ini untuk tetap mengetahui bagaimana kami melindungi informasi Anda.
                </p>
            </section>

            <section class="md:ml-3">
                <h2 class="text-lg md:mb-2 md:mt-2">7. Hubungi Kami</h2>
                <p class="md:ml-8">
                    Jika Anda memiliki pertanyaan atau kekhawatiran tentang kebijakan privasi ini atau praktik privasi kami, silakan hubungi kami melalui:
                </p>
                <ul class="md:ml-3">
                    <li class="md:ml-10"><strong>Alamat:</strong> Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, DIY</li>
                    <li class="md:ml-10"><strong>Telepon:</strong> 081325982636</li>
                    <li class="md:ml-10"><strong>Email:</strong> sablonin@gmail.com</li>
                    <li class="md:ml-10"><strong>Website:</strong> <a href="http://sablonin.com">sablonin.com</a></li>
                </ul>
            </section>

        </div>


        <div class="h-[100px]"></div>


@endsection

