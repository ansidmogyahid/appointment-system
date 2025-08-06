<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') ?? 'Easycut | Appointment' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="bg-cover bg-center min-h-screen" style="background-image: url('/images/landing-bg.jpg')">

        <!-- Navbar -->
        <nav class="bg-amber-800 bg-opacity-90 px-32 py-4 flex justify-between items-center shadow-md">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-black rounded-full flex items-center justify-center">
                    <span class="text-white font-bold text-xl">👨‍🦰</span>
                </div>
            </div>
            <div class="flex space-x-6 text-white font-medium">
                <a href="#" class="hover:underline">Home</a>
                <a href="#" class="hover:underline">Services</a>
                <a href="#" class="hover:underline">About</a>
                <a href="#" class="hover:underline">Barbers</a>
            </div>

            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded">Login</a>
            @endif
        </nav>

        <!-- Hero Section with Images on Right -->
        @include('landing.hero')

        <!-- Services --> 
        @include('landing.services')

        <!-- About -->    
        @include('landing.about')

        <!-- Barbers -->    
        @include('landing.barbers')
    </body>
</html>
