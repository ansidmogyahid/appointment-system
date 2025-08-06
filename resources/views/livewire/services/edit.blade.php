<div class="max-w-5xl mx-auto mt-10 p-8 border border-gray-300 rounded-xl shadow-sm">
  <h2 class="text-lg font-semibold text-gray-800 mb-2">Edit Service</h2>
  <p class="font-semibold text-sm text-brown-700 mb-4">Service Information:</p>

  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6 items-start">
    <!-- Service Name -->
    <div>
      <input type="text" wire:model.defer="name" placeholder="Service" class="border border-gray-400 rounded-md px-4 py-2 w-full">
      @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <!-- Price -->
    <div>
      <input type="text" wire:model.defer="price" placeholder="Price" class="border border-gray-400 rounded-md px-4 py-2 w-full">
      @error('price') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <!-- Image preview -->
    <div class="col-span-1 md:col-span-2 flex flex-col items-center">
      <div class="border border-black p-2 rounded-md">
        @if ($image)
          <img src="{{ $image->temporaryUrl() }}" class="w-24 h-24 object-cover rounded" alt="Preview">
        @elseif ($existingImage)
          <img src="{{ asset('storage/' . $existingImage) }}" class="w-24 h-24 object-cover rounded" alt="Current Image">
        @else
          <img src="https://via.placeholder.com/100" class="w-24 h-24 object-cover rounded" alt="Placeholder">
        @endif
      </div>
      @error('image') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
    </div>

    <!-- Description -->
    <div class="col-span-1 md:col-span-2">
      <textarea wire:model.defer="description" placeholder="Description" rows="4" class="border border-gray-400 rounded-md px-4 py-2 w-full"></textarea>
      @error('description') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    <!-- Browse Button -->
    <div class="col-span-1 md:col-span-2 flex justify-center">
      <label class="bg-yellow-300 text-white font-semibold px-4 py-2 rounded cursor-pointer hover:opacity-90 transition">
        Browse
        <input type="file" wire:model="image" class="hidden">
      </label>
    </div>
  </div>

  <!-- Buttons -->
  <div class="flex space-x-4">
    <a href="{{ route('services.index') }}" class="px-6 py-2 bg-gradient-to-r from-red-400 to-orange-300 text-white font-semibold rounded hover:opacity-90 transition">Cancel</a>
    <button wire:click="save" type="button" class="px-6 py-2 bg-gradient-to-r from-yellow-400 to-orange-300 text-white font-semibold rounded hover:opacity-90 transition">Update</button>
  </div>
</div>