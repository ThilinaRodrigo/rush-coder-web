<!-- layout.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
         <!-- AOS CSS -->
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

         <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <!-- Your custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
        <link rel="stylesheet" href="{{ asset('css/faqsection.css') }}">
        
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.waves.min.js"></script>
        
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        {{-- for the scrollspy functionality --}}
        <div x-data="scrollSpy()" x-init="init()" @scroll.window="onScroll">
            
    
    </head>

    <body class="bg-black " id="body">

        @include('partials.navbar')

        <div class="max-w-7xl mx-auto">
            @yield('content')
        </div>

        <!-- start Back to Top Button -->

        <button id="backToTopBtn" onclick="scrollToTop()"
        class="fixed bottom-6 right-6 z-50 bg-white/10 backdrop-blur-md text-white p-3 rounded-full shadow-md hover:bg-white/20 transition duration-300 hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-400" fill="none" viewBox="0 0 24 24"
        stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
        </svg>
        </button>

       <!-- end Back to Top Button -->

        @include('partials.footer') 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script>
        
        VANTA.WAVES({
        el: "body",
        mouseControls: false,
        touchControls: false,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0x0,
        shininess: 20.00,
        waveHeight: 28.50,
        waveSpeed: 0.75,
        zoom: 1.36

        })
        </script>

        <!-- AOS JS + Initialization -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script>
            // Team Swiper
            const teamSwiper = new Swiper('.team-swiper', {
                loop: true,
                spaceBetween: 30,
                grabCursor: true,
                slidesPerView: 1,
                autoplay: {
                    delay: 3000, 
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: { slidesPerView: 1 },
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                    1280: { slidesPerView: 4 },
                },
                navigation: {
                    nextEl: '.team-swiper-next',
                    prevEl: '.team-swiper-prev',
                },
            });

            // Sponsor Swiper
            const sponsorSwiper = new Swiper('.sponsor-swiper', {
                loop: true,
                spaceBetween: 20,
                slidesPerView: 1,
                autoplay: {
                    delay: 2500, 
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                },
                navigation: {
                    nextEl: '.sponsor-swiper-next',
                    prevEl: '.sponsor-swiper-prev',
                },
                pagination: {
                    el: '.sponsor-swiper-pagination',
                    clickable: true,
                },
            });

            // Memory Swiper
            const memoryThumbs = new Swiper(".memoryThumbs", {
                loop: true,
                spaceBetween: 10,
                slidesPerView: 5,
                freeMode: true,
                watchSlidesProgress: true,
            });

            const memoryMain = new Swiper(".memoryMain", {
                loop: true,
                spaceBetween: 10,
                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                },
                thumbs: {
                swiper: memoryThumbs,
                },
            });
        </script>

       {{--  Back to Top Button Js --}}
        <script>
            const backToTopBtn = document.getElementById("backToTopBtn");
        
            window.addEventListener("scroll", () => {
            backToTopBtn.style.display = window.scrollY > 200 ? "block" : "none";
            });
        
            function scrollToTop() {
            window.scrollTo({ top: 0, behavior: "smooth" });
            }
        </script>
  
  

    </body>
</html>
