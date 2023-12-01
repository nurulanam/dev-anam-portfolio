<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('extraMeta')
    {!! SEO::generate() !!}
    @vite('resources/js/app.js')
</head>

<body class="overflow-x-hidden bg-dark-main">
    <!-- main container start  -->
    <main>
        @include('includes.nav')

        @yield('contents')

        @include('includes.footer')

    </main>
    @yield('extraJs')
</body>
</html>
