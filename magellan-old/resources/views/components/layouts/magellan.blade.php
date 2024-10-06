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
        <link href="{{ asset('css/myCss.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'public/css/myCss.css', 'resources/js/app.js', 'public/js/myJs.js'])

        {{-- Leaflet mapping --}}
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


        

        

        <!-- added for Google Maps -->
        {{-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script> --}}
                <!-- Google Maps -->
        
        
        {{-- <script src="{{ asset('js/myJs.js') }}"></script> --}}

        <!-- Styles -->

        {{-- <script type='text/javascript'
            src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AjHvSstN_4JtF7UvjbOJF5h7anped37MpoUWSUOU1M48S3a_jGXANmjO0Q8Nj4Hw' 
            async defer>
        </script> --}}

        
     
    </head>
    <body class="font-sans antialiased">

        
        
        {{ $slot }}
        


    </body>

</html>
