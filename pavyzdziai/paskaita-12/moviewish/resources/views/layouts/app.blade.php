<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>MovieWish - @yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>
