<header class="sticky top-0 z-50 ">
    <!-- Navbar -->
    <nav class="bg-transparent navbar transition duration-300" x-data="{ open: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 10 })"
    :class="scrolled ? 'backdrop-blur-md bg-black/50 ' : 'bg-transparent'">

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
                          <a href="#home" 
                            :class="current === 'home' ? 'text-orange-400' : 'text-gray-300'"  
                            class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-orange-400"
                              aria-current="page">HOME</a>
                          <a href="#about"
                              :class="current === 'about' ? 'text-orange-400' : 'text-gray-300'"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-orange-400">ABOUT</a>
                          <a href="#timeline"
                              :class="current === 'timeline' ? 'text-orange-400' : 'text-gray-300'"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-orange-400">TIMELINE</a>
                          <a href="#awards"
                              :class="current === 'awards' ? 'text-orange-400' : 'text-gray-300'"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-orange-400">AWARDS</a>
                          <a href="#process"
                              :class="current === 'process' ? 'text-orange-400' : 'text-gray-300'"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-orange-400">PROCESS</a>
                          <a href="#team"
                              :class="current === 'team' ? 'text-orange-400' : 'text-gray-300'"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-orange-400">CONTACT</a>
                          <a href="#partners"
                              :class="current === 'partners' ? 'text-orange-400' : 'text-gray-300'"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-orange-400">PARTNERS</a>
                          <a href="#memories"
                              :class="current === 'memories' ? 'text-orange-400' : 'text-gray-300'"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-orange-400">GALLERY</a>
                          <a href="#faq"
                             :class="current === 'faq' ? 'text-orange-400' : 'text-gray-300'"
                              class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-orange-400">FAQs</a>
                      </div>
                  </div>
              </div>



              <!-- Right side content (notification and user menu) -->
    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
      

    <!-- Profile dropdown -->
    <div class="relative ml-3" x-data="{ userMenu: false }">
        <button @click="userMenu = !userMenu"
        class="flex items-center justify-center w-10 h-10 rounded-full ring-1 ring-orange-400 bg-black/30 backdrop-blur-md hover:ring-2 hover:ring-orange-500 transition duration-200">
        <img class="w-9 h-9 rounded-full object-cover"
            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt="User Avatar">
        </button>
    
        <div x-show="userMenu" @click.away="userMenu = false" x-transition
        class="absolute right-0 mt-3 w-48 bg-black/60 backdrop-blur-md text-white rounded-2xl shadow-xl border border-orange-500 z-50">
        <div class="px-4 py-2 text-sm text-gray-300 border-b border-orange-400">
            Signed in as<br>
            <span class="font-semibold text-white">johndoe@example.com</span>
        </div>
        <a href="#"
            class="flex items-center px-4 py-2 text-sm hover:bg-orange-500/70 hover:text-white transition">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24"><path d="M5.121 17.804A8.966 8.966 0 003 12c0-4.97 4.03-9 9-9s9 4.03 9 9a8.966 8.966 0 01-2.121 5.804M15 12h.01M9 12h.01M9.172 16.172a4.001 4.001 0 005.656 0" stroke-linecap="round" stroke-linejoin="round" /></svg>
            Profile
        </a>
        <a href="#"
            class="flex items-center px-4 py-2 text-sm hover:bg-orange-500/70 hover:text-white transition">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24"><path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round" /></svg>
            Settings
        </a>
        <a href="#"
            class="flex items-center px-4 py-2 text-sm hover:bg-red-600/80 hover:text-white transition rounded-b-2xl">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7" stroke-linecap="round" stroke-linejoin="round" /></svg>
            Sign out
        </a>
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
                  <a href="#about"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">ABOUT</a>
                  <a href="#timeline"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">TIMELINE</a>
                  <a href="#awards"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">AWARDS</a>
                  <a href="#process"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">PROCESS</a>
                  <a href="#team"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">CONTACT</a>
                  <a href="#partners"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">PARTNERS</a>
                  <a href="#memories"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">GALLERY</a>
                  <a href="#faq"
                      class="block px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">FAQs</a>
              </div>
          </div>
      </div>
  </nav>
</header>

<script>
    function scrollSpy() {
      return {
        current: '',
        sections: [],
        init() {
          this.sections = Array.from(document.querySelectorAll('section[id]')).map(section => ({
            id: section.id,
            offset: section.offsetTop
          }));
          this.onScroll(); 
        },
        onScroll() {
          const scrollPosition = window.scrollY + 150;
          for (let i = this.sections.length - 1; i >= 0; i--) {
            if (scrollPosition >= this.sections[i].offset) {
              this.current = this.sections[i].id;
              break;
            }
          }
        }
      };
    }
  </script>
<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>  