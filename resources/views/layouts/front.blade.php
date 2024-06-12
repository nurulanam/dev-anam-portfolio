<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="0nLit_UstaOqJ-EyyJJcyB0q0wQOCT1AUEjr4i15gl4" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/favicon-96x96.png') }}">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="{{ asset('/favicon-180x180.png') }}">
    @yield('extraMeta')
    {!! SEO::generate() !!}
    @vite('resources/js/app.js')
</head>

<body class="overflow-x-hidden bg-dark-main">
    <!-- main container start  -->
    @include('includes.nav')
    <main>
        @yield('contents')
        @include('includes.footer')
    </main>
    @yield('extraJs')
</body>
</html>
