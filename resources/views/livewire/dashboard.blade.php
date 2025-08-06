<div class="flex flex-col">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 mb-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mt-6">
        <div class="bg-white border rounded shadow p-4 flex flex-col items-center">
            <span class="text-2xl">👥</span>
            <p class="text-sm font-medium text-gray-600 mt-2">Users</p>
            <p class="text-2xl font-bold">{{ $users_count }}</p>
        </div>
        <div class="bg-white border rounded shadow p-4 flex flex-col items-center">
            <span class="text-2xl">💼</span>
            <p class="text-sm font-medium text-gray-600 mt-2">Admin</p>
            <p class="text-2xl font-bold">{{ $admins }}</p>
        </div>
        <div class="bg-white border rounded shadow p-4 flex flex-col items-center">
            <span class="text-2xl">💈</span>
            <p class="text-sm font-medium text-gray-600 mt-2">Barbers</p>
            <p class="text-2xl font-bold"> {{ $barbers }} </p>
        </div>
        <div class="bg-white border rounded shadow p-4 flex flex-col items-center">
            <span class="text-2xl">🧍</span>
            <p class="text-sm font-medium text-gray-600 mt-2">Clients</p>
            <p class="text-2xl font-bold"> {{ $customers }} </p>
        </div>
        <div class="bg-white border rounded shadow p-4 flex flex-col items-center">
            <span class="text-2xl">₱</span>
            <p class="text-sm font-medium text-gray-600 mt-2">Income</p>
            <p class="text-2xl font-bold">100,000</p>
        </div>
    </div>

    <!-- Sales Chart -->
    <livewire:dashboard.sales-chart />
</div>