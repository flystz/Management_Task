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
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <x-sidebar></x-sidebar>
        <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-72">



            <div class="container mx-auto mt-10">
                <main>
                    {{ $slot }}
                </main>

            </div>
        </div>

        <script>
            feather.replace();
        </script>


</body>

</html>