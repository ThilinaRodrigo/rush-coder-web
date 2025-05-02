<header class="sticky top-0 z-50 ">
  <nav class="bg-transparent navbar" x-data="{ open: false }">

      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-center">

              <!-- Mobile menu button -->
              <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                  <button type="button"
                      class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none focus:ring-inset"
                      aria-controls="mobile-menu" aria-expanded="false" @click="open = !open">
                      <svg x-show="!open" class="block size-6" fill="none" viewBox="0 0 24 24"
                          stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                      </svg>

                      <svg x-show="open" class="block size-6" fill="none" viewBox="0 0 24 24"
                          stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                      </svg>
                  </button>
              </div>

              <div class="flex flex-1 items-center justify-center">
                  <img src="{{ asset('logo.png') }}" width="100" height="100"
                      class="d-inline-block align-top" alt="">

                  <div class="hidden sm:block">
                      <div class="flex space-x-4">
                          <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                              aria-current="page">HOME</a>
                          <a href="#about"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">ABOUT</a>
                          <a href="#timeline"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">TIMELINE</a>
                          <a href="#"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">AWARDS</a>
                          <a href="#"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">PROCESS</a>
                          <a href="#"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">CONTACT</a>
                          <a href="#"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">PARTNERS</a>
                          <a href="#"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">GALLERY</a>
                          <a href="#"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">FAQs</a>
                      </div>
                  </div>
              </div>



              <!-- Right side content (notification and user menu) -->
              {{-- <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
      

      <!-- Profile dropdown -->
      <div class="relative ml-3" x-data="{ userMenu: false }">
          <div>
          <button type="button"
              class="relative flex rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none"
              id="user-menu-button" aria-expanded="false" aria-haspopup="true" @click="userMenu = !userMenu">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="size-8 rounded-full"
              src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
              alt="">
          </button>
          </div>

          <!-- Dropdown menu -->
          <div x-show="userMenu" @click.away="userMenu = false"
          class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
          role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
          x-transition>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
              role="menuitem" tabindex="-1">Your Profile</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
              role="menuitem" tabindex="-1">Settings</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
              role="menuitem" tabindex="-1">Sign out</a>
          </div>
      </div>
      </div> --}}
          </div>
      </div>

      <!-- Mobile menu -->
      <!-- Mobile menu - Glass style that doesn't replace content -->
      <div class="sm:hidden fixed left-0 top-0 z-40 h-screen" x-show="open"
          x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 transform -translate-x-full"
          x-transition:enter-end="opacity-100 transform translate-x-0"
          x-transition:leave="transition ease-in duration-300"
          x-transition:leave-start="opacity-100 transform translate-x-0"
          x-transition:leave-end="opacity-0 transform -translate-x-full">
          <!-- Glass effect menu panel -->
          <div class="h-full w-64 backdrop-blur-md  border-r border-gray-700 p-4">
              <div class="flex justify-end mb-4">
                  <button @click="open = false" class="text-gray-300 hover:text-white">
                      <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                  </button>
              </div>
  
              <!-- Menu items -->
              <div class="space-y-1">
                  <a href="#" class="block px-3 py-2 text-sm font-medium text-white">HOME</a>
                  <a href="#"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">ABOUT</a>
                  <a href="#"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">TIMELINE</a>
                  <a href="#"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">AWARDS</a>
                  <a href="#"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">PROCESS</a>
                  <a href="#"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">CONTACT</a>
                  <a href="#"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">PARTNERS</a>
                  <a href="#"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">GALLERY</a>
                  <a href="#"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">FAQs</a>
              </div>
          </div>
      </div>
  </nav>
</header>