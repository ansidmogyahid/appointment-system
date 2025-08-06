<div>
    <div class="flex justify-between items-center mb-4">
        <a href="{{ route('user-management.create') }}" class="border border-black px-4 py-2 rounded hover:bg-gray-100 font-semibold">Add +</a>
        <input type="text" placeholder="Search..." wire:model="search" class="border border-black px-4 py-2 rounded">
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
            <th class="text-left px-4 py-2 border">User_ID</th>
            <th class="text-left px-4 py-2 border">Full Name</th>
            <th class="text-left px-4 py-2 border">Email</th>
            <th class="text-left px-4 py-2 border">Role</th>
            <th class="text-left px-4 py-2 border">Contact</th>
            <th class="text-left px-4 py-2 border">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">00011</td>
            <td class="px-4 py-2 border">Admin, admin</td>
            <td class="px-4 py-2 border">admin@gmail.com</td>
            <td class="px-4 py-2 border">Admin</td>
            <td class="px-4 py-2 border">12345678912</td>
            <td class="px-4 py-2 border flex space-x-2">
                <a href="{{ route('user-management.edit', 121) }}" class="text-black hover:text-blue-600">
                ✏️ <!-- edit icon -->
                </a>
                <button @click="modalOpen=true" class="text-black hover:text-red-600">
                🗑️ <!-- delete icon -->
                </button>
            </td>
            </tr>
            <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">00012</td>
            <td class="px-4 py-2 border">Barber, barber</td>
            <td class="px-4 py-2 border">barber@gmail.com</td>
            <td class="px-4 py-2 border">Barber</td>
            <td class="px-4 py-2 border">12345678912</td>
            <td class="px-4 py-2 border flex space-x-2">
                <button class="text-black hover:text-blue-600">
                ✏️
                </button>
                <button class="text-black hover:text-red-600">
                🗑️
                </button>
            </td>
            </tr>
            <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 border">00013</td>
            <td class="px-4 py-2 border">Client, client</td>
            <td class="px-4 py-2 border">client@gmail.com</td>
            <td class="px-4 py-2 border">Client</td>
            <td class="px-4 py-2 border">12345678912</td>
            <td class="px-4 py-2 border flex space-x-2">
                <button class="text-black hover:text-blue-600">
                ✏️
                </button>
                <button class="text-black hover:text-red-600">
                🗑️
                </button>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
</div>