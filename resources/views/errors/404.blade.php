<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>404</title>
        @vite(['resources/js/site.js', 'resources/css/site.css'])
    </head>
    <body>
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="text-center">
                <h1 class="text-9xl font-extrabold text-gray-800">404</h1>
                <p class="text-2xl md:text-3xl font-semibold mt-4">Page not found</p>
                <p class="text-gray-600 mt-2">Sorry, the page you are looking for doesn’t exist or has been moved.</p>
                
                <div class="mt-6">
                    <a href="{{ url('/') }}" 
                       class="px-6 py-3 text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 transition">
                        Go Home
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>