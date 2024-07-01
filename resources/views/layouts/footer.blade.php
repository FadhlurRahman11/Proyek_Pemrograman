

<footer class="bg-[#d9e3ef]">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0 md:w-[30%]">
              <a href="/" class="flex items-center">
                  <img src="{{URL::asset('img/logo.png')}}" class="h-auto w-[200px]" alt="Sablonin" />
              </a>
              <p class="w-full">Ekspresikan kreativitasmu melalui desain jersey yang unik, dengan jaminan kualitas terbaik.</p>
          </div>
          <div class="w-[10%]"></div>
          <div class="md:w-[60%] grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Legal</h2>
                  <ul class="text-gray-700 font-medium">
                      <li class="mb-4">
                          <a href="{{route('kebijakan')}}" class="hover:underline">Kebijakan Privasi</a>
                      </li>
                      <li>
                          <a href="{{route('syarat')}}" class="hover:underline">Syarat dan Ketentuan</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Ikuti Kami</h2>
                  <ul class="text-gray-700 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline ">Instagram</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Tiktok</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Kontak</h2>
                  <ul class="text-gray-700 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">sablonin@gmail.com</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, DIY</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-900 sm:mx-auto dark:border-gray-900 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
          </span>
      </div>
    </div>
</footer>
