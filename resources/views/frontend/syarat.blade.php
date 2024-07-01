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
                <h1 class="text-white text-5xl font-bold">#Syarat dan Ketentuan
                </h1>
                <div class="gap h-[200px]"></div>
            </div>
            <div class="blank w-[50%] md:w-full">

            </div>
        </div>
    </div>

    <div class="content-1 max-w-screen-xl md:flex md:flex-wrap md:items-center mx-auto">
        <div class="h-[100px]"></div>

        <p>Selamat datang di Sablonin. Dengan mengakses dan menggunakan situs web kami serta layanan yang kami sediakan, Anda menyetujui syarat dan ketentuan berikut. Mohon dibaca dengan seksama.</p>

        <h2 class="md:ml-3">1. Penerimaan Syarat</h2>
        <p class="md:ml-10">Dengan mengakses atau menggunakan situs web dan layanan kami, Anda setuju untuk terikat oleh syarat dan ketentuan ini. Jika Anda tidak setuju dengan syarat dan ketentuan ini, mohon untuk tidak menggunakan situs web dan layanan kami.</p>

        <h2 class="md:ml-3">2. Penggunaan Situs Web</h2>
        <ul>
            <li class="md:ml-10"><strong>Konten:</strong> Semua konten yang terdapat di situs web ini, termasuk teks, grafik, logo, gambar, dan perangkat lunak adalah milik Sablonin dan dilindungi oleh undang-undang hak cipta.</li>
            <li class="md:ml-10"><strong>Akses:</strong> Anda diperbolehkan mengakses dan menggunakan situs web kami untuk tujuan pribadi dan non-komersial. Dilarang menggunakan konten situs web untuk tujuan komersial tanpa izin tertulis dari kami.</li>
            <li class="md:ml-10"><strong>Larangan:</strong> Anda setuju untuk tidak menggunakan situs web kami untuk kegiatan yang melanggar hukum, termasuk tetapi tidak terbatas pada, penipuan, spamming, atau penyebaran virus.</li>
        </ul>

        <h2 class="md:ml-3">3. Pemesanan dan Pembayaran</h2>
        <ul>
            <li class="md:ml-10"><strong>Pemesanan:</strong> Semua pemesanan produk melalui situs web kami tunduk pada ketersediaan dan penerimaan pesanan oleh kami.</li>
            <li class="md:ml-10"><strong>Harga:</strong> Harga produk ditampilkan di situs web dan dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya. Harga yang tertera pada saat Anda melakukan pemesanan adalah harga yang akan diterapkan pada pesanan Anda.</li>
            <li class="md:ml-10"><strong>Pembayaran:</strong> Pembayaran harus dilakukan penuh pada saat pemesanan. Kami menerima berbagai metode pembayaran yang ditentukan di situs web kami.</li>
            <li class="md:ml-10"><strong>Pengiriman:</strong> Waktu pengiriman dapat bervariasi tergantung lokasi Anda. Kami tidak bertanggung jawab atas keterlambatan yang disebabkan oleh pihak ketiga atau keadaan di luar kendali kami.</li>
        </ul>

        <h2 class="md:ml-3">4. Pengembalian dan Pengembalian Dana</h2>
        <ul>
            <li class="md:ml-10"><strong>Kebijakan Pengembalian:</strong> Produk yang dibeli melalui situs web kami dapat dikembalikan dalam jangka waktu tertentu yang ditentukan di kebijakan pengembalian kami.</li>
            <li class="md:ml-10"><strong>Proses Pengembalian:</strong> Untuk memulai proses pengembalian, Anda harus menghubungi layanan pelanggan kami dan mengikuti petunjuk yang diberikan.</li>
        </ul>

        <h2 class="md:ml-3">5. Batasan Tanggung Jawab</h2>
        <p class="md:ml-10">Kami tidak bertanggung jawab atas kerusakan atau kerugian yang timbul dari penggunaan atau ketidakmampuan untuk menggunakan situs web kami atau layanan kami, termasuk tetapi tidak terbatas pada kerugian langsung, tidak langsung, insidental, atau konsekuensial.</p>

        <h2 class="md:ml-3">6. Perubahan Syarat dan Ketentuan</h2>
        <p class="md:ml-10">Kami berhak untuk mengubah syarat dan ketentuan ini kapan saja. Setiap perubahan akan diposting di halaman ini dan berlaku efektif segera setelah diposting. Anda dianjurkan untuk secara berkala meninjau syarat dan ketentuan ini untuk tetap mengetahui adanya perubahan.</p>

        <h2 class="md:ml-3">7. Hukum yang Berlaku</h2>
        <p class="md:ml-10">Syarat dan ketentuan ini diatur dan ditafsirkan sesuai dengan hukum yang berlaku di Indonesia. Setiap perselisihan yang timbul dari atau terkait dengan syarat dan ketentuan ini akan diselesaikan di pengadilan yang berwenang di Indonesia.</p>
        <h2 class="md:ml-3">8. Kontak Kami</h2>
            <ul class="w-full">
                <li class="md:ml-10"><strong>Alamat:</strong> Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, DIY</li>
                <li class="md:ml-10"><strong>Telepon:</strong> 081325982636</li>
                <li class="md:ml-10"><strong>Email:</strong> <a href="mailto:sablonin@gmail.com">sablonin@gmail.com</a></li>
                <li class="md:ml-10"><strong>Website:</strong> <a href="http://sablonin.com">sablonin.com</a></li>
            </ul>


        <p>Terima kasih telah memilih Sablonin. Kami berharap Anda memiliki pengalaman yang menyenangkan dengan layanan kami.</p>
    </div>


        <div class="h-[100px]"></div>

@endsection

