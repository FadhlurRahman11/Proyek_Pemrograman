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
                <h1 class="text-white text-5xl font-bold">#Kontak Kami</h1>
                <div class="gap h-[200px]"></div>
            </div>
            <div class="blank w-[50%] md:w-full">

            </div>
        </div>
    </div>

    <div class="content-1 max-w-screen-xl md:flex md:flex-wrap md:items-center mx-auto">
        <div class="content mt-[100px] mb-[100px] w-full">
            <h2 class="mb-10 text-2xl font-bold text-center w-full">Temukan kami disini/Hubungi kami melalui kontak dibawah ini</h2>
            <div class="md:flex md:justify-between">
                <div class="img w-full md:w-[50%]">
                    <iframe style="border-radius: 20px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3855.445110925383!2d110.41373527392196!3d-7.752512136226641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5978ee5b8fa9%3A0xc3076270c6af50af!2sStadion%20Maguwoharjo%20Sleman!5e0!3m2!1sid!2sid!4v1719721524163!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="w-full md:w-[50%]">
                    <div class="wa flex p-8 rounded-lg shadow-md bg-gray-50 mb-10">
                        <div class="icon mr-4">
                            <svg class="w-14 h-14 text-[#4572ad]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"/>
                              </svg>
                        </div>
                        <div class="content">
                            <h3 class="font-lg text-lg text-[#4572ad]">Phone</h3>
                            <span>081325982636</span>
                        </div>
                    </div>
                    <div class="wa flex p-8 rounded-lg shadow-md bg-gray-50 mb-10">
                        <div class="icon mr-4">
                            <svg class="w-14 h-14 text-[#4572ad]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                                <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                              </svg>

                        </div>
                        <div class="content">
                            <h3 class="font-lg text-lg text-[#4572ad]">Whatsapp</h3>
                            <span>081325982636</span>
                        </div>
                    </div>
                    <div class="wa flex p-8 rounded-lg shadow-md bg-gray-50 mb-10">
                        <div class="icon mr-4">
                            <svg class="w-14 h-14 text-[#4572ad]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.965 5.965 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4-.075 0-.148.012-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4Zm-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2Z"/>
                              </svg>
                        </div>
                        <div class="content">
                            <h3 class="font-lg text-lg text-[#4572ad]">Mail</h3>
                            <span>sablonin@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="h-[100px]"></div>


@endsection
