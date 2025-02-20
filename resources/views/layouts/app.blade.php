<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Chimerasite') }}</title>
        <link rel="icon" type="image/png" href="/assets/img/chimerasite_logo.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="/assets/fonts/fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="/assets/fonts/fontawesome/css/brands.css" rel="stylesheet">
        <link href="/assets/fonts/fontawesome/css/solid.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/script.js') }}"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://www.google.com/recaptcha/api.js"></script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="antialiased bg-indigo-50 relative font-exo">

        <div class="lg:flex min-h-screen overflow-x-clip">
            <!-- Navigation -->
            <div class="relative relative">
                @livewire('navigation')
            </div>
            <div class="w-full lg:mx-auto min-h-screen flex flex-col justify-between">
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
                <footer class="flex sm:flex-row flex-col items-center justify-end bg-gray-400 text-blue-950 text-sm px-4 py-1 space-y-2">
                    <div class="w-full uppercase space-x-3 text-center">
                        <a class="hover:text-blue-500" href="{{ route('terms') }}">Terms</a>
                        <a class="hover:text-blue-500" href="{{ route('privacy') }}">Privacy</a>
                        <a class="hover:text-blue-500" href="mailto:info@chimerasite.com">Contact</a>
                    </div>
                    <span class="sm:absolute sm:bottom-1">
                        &copy;<a href="https://chimerasite.com/">Chimerasite</a> <?php echo date("Y"); ?>
                    </span>
                </footer>
            </div>
        </div>

        @livewireScripts
        @stack('scripts')
    </body>
</html>
