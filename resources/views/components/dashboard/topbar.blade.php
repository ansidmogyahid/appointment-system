@props(['title' => 'Dashboard', 'user' => 'Admin'])

<div class="flex justify-between items-center bg-[#f5e3b4] px-6 py-4 rounded shadow mb-4">
    <h2 class="text-xl font-bold text-gray-800">{{ $title }}</h2>
    <div class="flex items-center gap-4">
        <span class="font-semibold text-gray-700">Welcome: {{ $user }}</span>
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" 
                    class="border border-gray-700 text-gray-700 px-4 py-1 cursor-pointer rounded hover:bg-gray-200">
                Logout
            </button>
        </form>
    </div>
</div>