<div>
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
                {{-- <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border">Image</td>
                    <td class="px-4 py-2 border">Taper Fade</td>
                    <td class="px-4 py-2 border">100.00</td>
                    <td class="px-4 py-2 border">N/A</td>
                    <td class="px-4 py-2 border flex space-x-2">
                        <a href="{{ route('services.edit', 121) }}" class="text-black hover:text-blue-600">
                        ✏️ <!-- edit icon -->
                        </a>
                        <button @click="modalOpen=true" class="text-black hover:text-red-600">
                        🗑️ <!-- delete icon -->
                        </button>
                    </td>
                </tr> --}}

                <tr>
                    <td colspan="5" class="text-center py-4 text-gray-500">
                        No services found
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>