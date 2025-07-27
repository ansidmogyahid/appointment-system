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
                <a href="{{ route('dashboard') }}" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Dashboard</a>
                <a href="{{ route('users-management') }}" class="bg-[#f5e3b4] text-black py-2 px-4 rounded font-semibold text-left">Users Management</a>
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
            <x-dashboard.topbar title="{{ $title }}" user="Admin"/>

            {{ $slot }}
        </main>
    </body>
</html>
