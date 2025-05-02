<section class="bg-transparent py-16 px-4 text-white scroll-mt-16" id="memories">
  <div class="max-w-4xl mx-auto"> 
    <h2 class="text-4xl font-bold text-center text-white mb-10">Memories</h2>

    <!-- Main Swiper -->
    <div class="swiper memoryMain mb-6 rounded-2xl overflow-hidden shadow-xl shadow-orange-400/20">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide h-[500px]"> 
          <img src="/images/memories/mem1.jpg" class="w-full h-[500px] object-cover" />
        </div>
        <!-- Slide 2 -->
        <div class="swiper-slide h-[500px]">
          <img src="/images/memories/mem2.jpg" class="w-full h-[500px] object-cover" />
        </div>
      </div>
      <!-- Navigation -->
      <div class="swiper-button-prev text-orange-500 "></div>
      <div class="swiper-button-next text-orange-500"></div>
    </div>

    <!-- Thumbnail Swiper -->
    <div class="swiper memoryThumbs d-flex justify-center items-center">
      <div class="swiper-wrapper">
        <div class="swiper-slide cursor-pointer rounded-md overflow-hidden border-2  transition-transform duration-300">
          <img src="/images/memories/mem1.jpg" class="w-full h-16 object-cover" />
        </div>
        <div class="swiper-slide cursor-pointer rounded-md overflow-hidden border-2  transition-transform duration-300">
          <img src="/images/memories/mem2.jpg" class="w-full h-16 object-cover" />
        </div>
      </div>
    </div>
    

  </div>
</section>

<style>
  .memoryThumbs .swiper-slide-thumb-active {
    border-color: #fb923c;
    box-shadow: #fb923c 0px 0px 10px;
  }
</style>

