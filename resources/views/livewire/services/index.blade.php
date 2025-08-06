<div x-data="{ modalOpen: @entangle('show_delete_modal') }">
    <div class="flex justify-between items-center mb-4">
        <a href="{{ route('services.create') }}" class="border border-black px-4 py-2 rounded hover:bg-gray-100 font-semibold">Add +</a>
        <input type="text" placeholder="Search..." wire:model.live="search" class="border border-black px-4 py-2 rounded">
    </div>
    
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                <th class="text-left px-4 py-2 border">Image</th>
                <th class="text-left px-4 py-2 border">Name</th>
                <th class="text-left px-4 py-2 border">Price</th>
                <th class="text-left px-4 py-2 border">Description</th>
                <th class="text-left px-4 py-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border">
                            <img 
                                src="{{ $service->image ? asset('storage/' . $service->image) : 'https://placehold.co/20x20' }}" 
                                alt="Profile Image" 
                                class="w-6 h-6 rounded-full object-cover"
                            />
                        </td>
                        <td class="px-4 py-2 border">{{ $service->name }}</td>
                        <td class="px-4 py-2 border">{{ number_format($service->price, 2) }}</td>
                        <td class="px-4 py-2 border">{{ $service->description ?? 'N/A' }}</td>
                        <td class="px-4 py-2 border flex space-x-2">
                            <a href="{{ route('services.edit', $service->id) }}" class="text-black hover:text-blue-600">✏️</a>
                            <button wire:click="showConfirmationModal({{ $service->id }})" class="text-black hover:text-red-600">🗑️</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">
                            No services found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
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
                <div class="relative w-auto">
                    <p>This action cannot be undone</p>
                    <p>Deleting this item will permanently remove it from the system.</p>

                    <div class="my-2">
                        <p>✅ Click Confirm to proceed</p>
                        <p>❌ Click Cancel to go back</p>
                    </div>
                </div>

                <div class="flex space-x-2 items-center">
                    <button @click="modalOpen=false" class="p-2 border rounded-md bg-red-500">Cancel</button>
                    <button wire:click="confirmDelete" class="p-2 border rounded-md bg-red-500">Confirm</button>
                </div>
            </div>
        </div>
    </template>
</div>