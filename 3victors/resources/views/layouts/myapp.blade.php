<!DOCTYPE html>
<html class="h-full bg-gray-900" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" sizes="114x114" href="https://assets-global.website-files.com/5f188bd8e3cc9f6f089b0b9f/5f188cdda4d4f94979627608_favicon.ico">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'public/js/myJs.js'])
        <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
        <!-- <script type="text/javascript" src="{{ asset('js/myJs.js') }}"></script> -->
        
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="h-full font-sans antialiased">
        <x-banner />

        <div x-data="status_x" class="">

            

            <!-- Page Heading -->
            <!-- @if (isset($header))
                <header class="bg-white shadow dark:bg-gray-800">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif -->

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
