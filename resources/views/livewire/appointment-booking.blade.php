<div x-data="{ modalOpen: false }" 
    class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('/your-background.jpg')">
  <div class="bg-white bg-opacity-30 rounded-2xl p-8 w-full max-w-4xl shadow-lg">
    <h1 class="text-3xl font-bold text-center text-yellow-500 mb-6">Book an Appointment</h1>
    
    <!-- Personal Information -->
    <h2 class="text-yellow-400 mb-2 font-semibold">Personal Information:</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
      <input type="text" placeholder="Full Name" class="p-3 rounded-lg w-full focus:outline-none">
      <input type="email" placeholder="Email" class="p-3 rounded-lg w-full focus:outline-none">
      <input type="password" placeholder="Password" class="p-3 rounded-lg w-full focus:outline-none">
      <input type="password" placeholder="Repeat Password" class="p-3 rounded-lg w-full focus:outline-none">
      <input type="text" placeholder="Contact" class="p-3 rounded-lg w-full focus:outline-none">
    </div>

    <!-- Reservation -->
    <h2 class="text-yellow-400 mb-2 font-semibold">Reservation:</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
      <select class="p-3 rounded-lg w-full focus:outline-none">
        <option>Select Barber</option>
        @foreach ($barbers as $barber)
            <option value="{{ $barber->id }}">{{ $barber->name }}</option>
        @endforeach
      </select>
      <select class="p-3 rounded-lg w-full focus:outline-none">
        <option>Select Service</option>
        @foreach ($services as $service)
            <option value="{{ $service->id }}">{{ $service->name }}</option>
        @endforeach
      </select>
      <input type="date" class="p-3 rounded-lg w-full focus:outline-none">
      <input type="time" class="p-3 rounded-lg w-full focus:outline-none">
    </div>

    <!-- Buttons -->
    <div class="flex justify-center gap-4">
      <a href="{{ route('welcome') }}" class="px-6 py-2 rounded-lg bg-orange-400 text-white hover:bg-orange-500">Cancel</a>
      <button @click="modalOpen=true" class="px-6 py-2 rounded-lg bg-yellow-400 text-white hover:bg-yellow-500">Save</button>
    </div>
  </div>

      <template x-teleport="body">
        <div x-show="modalOpen" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
            <div x-show="modalOpen" 
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="modalOpen=false" class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
            <div x-show="modalOpen"
                x-trap.inert.noscroll="modalOpen"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg">
                <div class="relative w-auto text-center font-semibold">
                    <div class="flex flex-col items-center justify-center">
                        <img src="https://thumbs.dreamstime.com/b/coming-soon-vector-announce-label-isolated-white-background-214295026.jpg" class="h-32" alt="">
                        <p>Booking Appointment Available soon...</p>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>
