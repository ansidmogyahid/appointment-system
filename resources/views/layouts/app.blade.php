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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    {{-- <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body> --}}

    <body class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#b48a6d] text-white flex flex-col items-center py-6">
            <div class="mb-8">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-24 h-24 rounded-full border-4 border-black">
            </div>
            <nav class="flex flex-col space-y-2 w-full pl-4">
                <a href="#" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Dashboard</a>
                <a href="#" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Users Management</a>
                <a href="#" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Services</a>
                <a href="#" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Schedules</a>
                <a href="#" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Appointments</a>
                <a href="#" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Notifications</a>
                <a href="#" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Reports</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-white p-6">
            <!-- Top Bar -->
            <div class="flex justify-between items-center bg-[#f5e3b4] px-6 py-4 rounded shadow">
                <h2 class="text-xl font-bold text-gray-800">Dashboard</h2>
                <div class="flex items-center gap-4">
                    <span class="font-semibold text-gray-700">Welcome: Admin</span>
                    <button class="border border-gray-700 text-gray-700 px-4 py-1 rounded hover:bg-gray-200">Logout</button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mt-6">
                <div class="bg-white border rounded shadow p-4 flex flex-col items-center">
                    <span class="text-2xl">👥</span>
                    <p class="text-sm font-medium text-gray-600 mt-2">Users</p>
                    <p class="text-2xl font-bold">50</p>
                </div>
                <div class="bg-white border rounded shadow p-4 flex flex-col items-center">
                    <span class="text-2xl">💼</span>
                    <p class="text-sm font-medium text-gray-600 mt-2">Admin</p>
                    <p class="text-2xl font-bold">2</p>
                </div>
                <div class="bg-white border rounded shadow p-4 flex flex-col items-center">
                    <span class="text-2xl">💈</span>
                    <p class="text-sm font-medium text-gray-600 mt-2">Barbers</p>
                    <p class="text-2xl font-bold">15</p>
                </div>
                <div class="bg-white border rounded shadow p-4 flex flex-col items-center">
                    <span class="text-2xl">🧍</span>
                    <p class="text-sm font-medium text-gray-600 mt-2">Clients</p>
                    <p class="text-2xl font-bold">40</p>
                </div>
                <div class="bg-white border rounded shadow p-4 flex flex-col items-center">
                    <span class="text-2xl">₱</span>
                    <p class="text-sm font-medium text-gray-600 mt-2">Income</p>
                    <p class="text-2xl font-bold">100,000</p>
                </div>
            </div>

            <!-- Chart Placeholder -->
            <div class="mt-6 p-6 border rounded shadow h-64">
            <!-- Chart would go here -->
            </div>
        </main>
    </body>
</html>
