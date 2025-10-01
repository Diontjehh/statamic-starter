<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? config('app.name') }}</title>
        @vite(['resources/js/site.js', 'resources/css/site.css'])
    </head>
    <body>
        @nocache('partials.header')

        <main class="h-screen">
            @yield('content')
        </main>

        @nocache('partials.footer')
    </body>
</html>
