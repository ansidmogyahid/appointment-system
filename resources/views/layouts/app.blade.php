<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <body class="flex h-screen relative">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#b48a6d] text-white flex flex-col items-center py-6">
            <div class="mb-8">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-24 h-24 rounded-full border-4 border-black">
            </div>
            <nav class="flex flex-col space-y-2 w-full pl-4">
                <a href="{{ route('dashboard') }}" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Dashboard</a>
                <a href="{{ route('user-management.index') }}" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Users Management</a>
                <a href="{{ route('services.index') }}" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Services</a>
                <a href="#" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Schedules</a>
                <a href="#" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Appointments</a>
                <a href="#" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Notifications</a>
                <a href="#" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Reports</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-white p-6">
            <!-- Top Bar -->
            <x-dashboard.topbar title="{{ $title }}" user="Admin"/>

            {{ $slot }}
        </main>

        @livewireScriptConfig 
        
        @if (session()->has('success'))
            <div 
                x-data="{ show: true }" 
                x-init="setTimeout(() => show = false, 5000)" 
                x-show="show" 
                x-transition
                class="bg-green-100 absolute bottom-2 right-2 text-green-800 p-4 rounded mb-4"
            >
                {{ session('success') }}
            </div>
        @endif
    </body>
</html>
