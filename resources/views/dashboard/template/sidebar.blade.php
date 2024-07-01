



  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 shadow-md" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <?php
            $active = 'bg-[#4773ae] text-white';
            $icon = 'text-white';
            $notIcon = 'text-gray-500';
            $notActv = 'bg-white';
            ?>
            <li>
                <a href="{{route('product')}}" class="{{ Request::is('dashboard/catalog') ? $active : $notActv }} flex items-center p-2 rounded-lg hover:text-gray-700 hover:bg-gray-200  group">
                   <svg class="flex-shrink-0 w-5 h-5 {{ Request::is('dashboard/catalog') ? $icon : $notIcon }} group-hover:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                      <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                   </svg>
                   <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                </a>
             </li>
           <li>
              <a href="{{route('user')}}" class="{{ Request::is('dashboard/user') ? $active : $notActv }} flex items-center p-2  rounded-lg hover:text-gray-700 hover:bg-gray-100  group">
                 <svg class="flex-shrink-0 w-5 h-5 {{ Request::is('dashboard/user') ? $icon : $notIcon }} group-hover:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                 </svg>
                 <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
              </a>
           </li>
           <li>
              <a href="{{route('profile')}}" class="{{ Request::is('dashboard/profile') ? $active : $notActv }} flex items-center p-2 pl-0 pr-0 hover:text-gray-700  rounded-lg hover:bg-gray-100  group">
                <svg class="w-8 h-8 text-gray-500 m-0 p-0 {{ Request::is('dashboard/profile') ? $icon : $notIcon }} group-hover:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                  </svg>
                 <span class="flex-1 ms-3 whitespace-nowrap">Edit Profile</span>
              </a>
           </li>
           <li>
              <a href="#" class="flex items-center p-2  rounded-lg hover:text-gray-700 hover:bg-gray-100  group">
                <svg class="w-5 h-5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stoke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                  </svg>
                 <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
              </a>
           </li>
        </ul>
     </div>
  </aside>

