<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel 10 tast list app</title>
        @yield('styles')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles i added it -->

        {{-- blade-formatter-disable --}}
        <style type="text/tailwindcss">
            .btn {
                @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-slate-700/10 hover:bg-slate-50
            }
            .link{
                @apply font-medium text-gray-700 underline decoration-pink-500
                
            }
        </style>
        {{-- blade-formatter-enable --}}
        
    </head>
    <body class="container mx-auto mt-10 mb-10 max-w-lg">

        <h1 class="text-2xl mb-4"> @yield("title") </h1>
        <div>
            @if (session()->has("success"))
                <div>{{ session("success")}}</div>
                
            @endif
            @yield("contents")
        </div>

        <!-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">  
        </div> -->
    </body>
</html>
