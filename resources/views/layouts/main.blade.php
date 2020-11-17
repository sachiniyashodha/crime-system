
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Crime Management System') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Google-Style-Login.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Pretty-Header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Hero-Technology.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Pretty-Registration-Form.css') }}">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="home.html">Home </a>
                        <a class="navbar-brand navbar-link" href="main.html">Main </a>
                        <a class="navbar-brand navbar-link" href="add_data.html">Add Data</a>
                        <a class="navbar-brand navbar-link" href="row_data.html">Row Data</a>
                        <a class="navbar-brand navbar-link" href="administratr.html">Administratr </a>
                        <a class="navbar-brand navbar-link" href="index.html">Logout </a>
                    </div>

                </div>
            </nav>
        </header>

        <div id="layoutSidenav_content">
            @yield('content')
        </div>

        <footer>
            <div class="col-md-12">
                <h4 class="text-center">CRIME MANAGEMENT SYSTEM- 2020 </h4></div>
            <h4 class="text-center"> </h4>
        </footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
