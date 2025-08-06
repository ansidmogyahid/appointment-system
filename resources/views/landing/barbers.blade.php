<section 
  x-data="{
    currentIndex: 0,
    total: 3,
    next() {
      this.currentIndex = (this.currentIndex + 1) % this.total;
    },
    prev() {
      this.currentIndex = (this.currentIndex - 1 + this.total) % this.total;
    }
  }"
  class="bg-white py-16 px-6 lg:px-20 text-center overflow-hidden"
>
  <!-- Heading -->
  <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
    Bar<span class="text-yellow-600">bers</span>
  </h2>
  <p class="max-w-4xl mx-auto text-sm text-gray-700 mb-12 leading-relaxed">
    At Mr. Swabeer Barber Shop, our barbers are more than just skilled hands with clippers — they’re artists, trendsetters, and trusted professionals dedicated to delivering the perfect look every time. With a passion for precision and a deep understanding of both classic and modern styles, our team ensures every cut, shave, and style is tailored to fit you.
  </p>

  <!-- Carousel Container -->
  <div class="relative max-w-6xl mx-auto">
    <!-- Left arrow -->
    <button @click="prev()" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white p-2 shadow rounded-full hover:bg-gray-100">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <!-- Slide Track -->
    <div class="overflow-hidden">
      <div class="flex transition-transform duration-500 ease-in-out" :style="`transform: translateX(-${currentIndex * 100}%);`">
        <!-- Slide 1 -->
        <div class="min-w-full flex justify-center px-4">
          <div class="relative bg-white border shadow-sm p-6 w-80 text-center">
            <div class="absolute inset-0 translate-x-2 translate-y-2 bg-white border border-gray-300 -z-10"></div>
            <img src="/icons/barber1.svg" alt="Juan Icon" class="mx-auto mb-4 w-16 h-16" />
            <h3 class="text-xl font-semibold text-yellow-700 mb-2">Juan</h3>
            <p class="text-sm text-gray-600 mb-4">
              Skilled and dedicated barber specializing in clean cuts, smooth shaves, and personalized styles. Focused on delivering quality service and customer satisfaction every time.
            </p>
            <button class="border border-gray-400 px-4 py-1 text-sm rounded hover:bg-gray-100 transition">
              Book
            </button>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="min-w-full flex justify-center px-4">
          <div class="relative bg-white border shadow-sm p-6 w-80 text-center">
            <div class="absolute inset-0 translate-x-2 translate-y-2 bg-white border border-gray-300 -z-10"></div>
            <img src="/icons/barber2.svg" alt="Michael Icon" class="mx-auto mb-4 w-16 h-16" />
            <h3 class="text-xl font-semibold text-yellow-700 mb-2">Michael</h3>
            <p class="text-sm text-gray-600 mb-4">
              Skilled and dedicated barber specializing in clean cuts, smooth shaves, and personalized styles. Focused on delivering quality service and customer satisfaction every time.
            </p>
            <button class="border border-gray-400 px-4 py-1 text-sm rounded hover:bg-gray-100 transition">
              Book
            </button>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="min-w-full flex justify-center px-4">
          <div class="relative bg-white border shadow-sm p-6 w-80 text-center">
            <div class="absolute inset-0 translate-x-2 translate-y-2 bg-white border border-gray-300 -z-10"></div>
            <img src="/icons/barber3.svg" alt="David Icon" class="mx-auto mb-4 w-16 h-16" />
            <h3 class="text-xl font-semibold text-yellow-700 mb-2">David</h3>
            <p class="text-sm text-gray-600 mb-4">
              Skilled and dedicated barber specializing in clean cuts, smooth shaves, and personalized styles. Focused on delivering quality service and customer satisfaction every time.
            </p>
            <button class="border border-gray-400 px-4 py-1 text-sm rounded hover:bg-gray-100 transition">
              Book
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Right arrow -->
    <button @click="next()" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white p-2 shadow rounded-full hover:bg-gray-100">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </button>
  </div>
</section>