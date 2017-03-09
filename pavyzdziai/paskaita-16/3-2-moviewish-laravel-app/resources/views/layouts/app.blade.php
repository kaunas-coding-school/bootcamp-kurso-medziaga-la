<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-left">

                <nav class="navbar navbar-default main-navigation">
                    <div class="col-xs-3">
                        <a href="#" class="menu-icon" data-toggle="offcanvas">Toggle nav</a>
                    </div><!--/.col-xs-12.col-sm-9-->
                    <div class="col-xs-6">
                        <div>
                            <a class="logo" href="/">MovieWish</a>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <a class="search-icon pull-right" href="search.html">Search</a>
                    </div>
                </nav>

                @yield('content')

                <div class="col-xs-3 sidebar-offcanvas" id="sidebar">
                  <div class="list-group">
                    <a href="index.html" class="list-group-item active">Home</a>
                    <a href="login.html" class="list-group-item">Login</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                  </div>
                </div><!--/.sidebar-offcanvas-->
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
