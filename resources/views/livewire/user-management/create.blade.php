<div class="max-w-5xl mx-auto mt-10 p-8 border border-gray-300 rounded-xl shadow-sm">
  <h2 class="text-lg font-semibold text-gray-800 mb-2">Add New</h2>
  <p class="font-semibold text-sm text-brown-700 mb-4">Personal Information:</p>

  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
    <input type="text" wire:model="name" placeholder="Full Name" class="border border-gray-400 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200">
    <input type="email" wire:model="email" placeholder="Email" class="border border-gray-400 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200">
    <input type="password" wire:model="password" placeholder="Password" class="border border-gray-400 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200">
    <input type="password" wire:model="password_confirmation" placeholder="Repeat Password" class="border border-gray-400 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200">
    <input type="text" wire:model="phone" placeholder="Contact" class="border border-gray-400 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200 col-span-1 md:col-span-2">
  </div>

  <div class="flex space-x-4">
    <button type="button" wire:click="resetForm" class="px-6 py-2 bg-gradient-to-r from-red-400 to-orange-300 text-white font-semibold rounded hover:opacity-90 transition">Cancel</button>
    <button type="button" wire:click="save" class="px-6 py-2 bg-gradient-to-r from-yellow-400 to-orange-300 text-white font-semibold rounded hover:opacity-90 transition">Save</button>
  </div>
</div>
