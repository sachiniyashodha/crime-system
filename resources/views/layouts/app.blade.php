<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Crime Management System') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   
    <!-- Material Kit CSS -->
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body class="mani-image">
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="white">

        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                CM SYSTEM
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="main">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item sidebar-dropdown">
                    <a class="nav-link" href="#">
                        <i class="material-icons">person</i>
                        <p>ENTER </p>
                    </a>
                    <div class="sidebar-submenu">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/avalability">
                                    <i class="material-icons">content_paste</i>
                                    <p>ENTER Avalability</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/accused">
                                    <i class="material-icons">content_paste</i>
                                    <p>ENTER Registration </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_entry_text">
                                    <i class="material-icons">content_paste</i>
                                    <p>ENTER Copy </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_accused">
                                    <i class="material-icons">content_paste</i>
                                    <p>ENTER View </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/wornted_person">
                                    <i class="material-icons">content_paste</i>
                                    <p>ENTER Statement <p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item sidebar-dropdown">
                    <a class="nav-link" href="#">
                        <i class="material-icons">person</i>
                        <p>Add Data</p>
                    </a>
                    <div class="sidebar-submenu">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/accused">
                                    <i class="material-icons">content_paste</i>
                                    <p>ACCUSED</p>
                                </a>


                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/petitioner">
                                    <i class="material-icons">content_paste</i>
                                    <p>PETITIONER</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/victim">
                                    <i class="material-icons">content_paste</i>
                                    <p>VICTIM</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/crime_file">
                                    <i class="material-icons">content_paste</i>
                                    <p>FIR</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/investigate">
                                    <i class="material-icons">content_paste</i>
                                    <p>INVESTIGATION</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/cases">
                                    <i class="material-icons">content_paste</i>
                                    <p>CASE</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/case_outcome">
                                    <i class="material-icons">content_paste</i>
                                    <p>CASE OUTCOME</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/section_of_low">
                                    <i class="material-icons">content_paste</i>
                                    <p>SECTION OF LOW</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/wornted_person">
                                    <i class="material-icons">content_paste</i>
                                    <p>WANTED PERSON</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item sidebar-dropdown">
                    <a class="nav-link" href="#">
                        <i class="material-icons">person</i>
                        <p>Row Data</p>
                    </a>
                    <div class="sidebar-submenu">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_accused">
                                    <i class="material-icons">content_paste</i>
                                    <p>ACCUSED</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_petitioner">
                                    <i class="material-icons">content_paste</i>
                                    <p>PETITIONER</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_victim">
                                    <i class="material-icons">content_paste</i>
                                    <p>VICTIM</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_fir">
                                    <i class="material-icons">content_paste</i>
                                    <p>FIR</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_investigation">
                                    <i class="material-icons">content_paste</i>
                                    <p>INVESTIGATION</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_case">
                                    <i class="material-icons">content_paste</i>
                                    <p>CASE</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_case_outcome">
                                    <i class="material-icons">content_paste</i>
                                    <p>CASE OUTCOME</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_section_of_low">
                                    <i class="material-icons">content_paste</i>
                                    <p>SECTION OF LOW</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/view_wornted_p">
                                    <i class="material-icons">content_paste</i>
                                    <p>WANTED PERSON</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">person</i>
                        <p>Entry Statement</p>
                    </a>
                </li>
                <div class="sidebar-submenu">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_entry_text">
                                    <i class="material-icons">content_paste</i>
                                    <p>View Text Entry</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/r_police_entry_c">
                                    <i class="material-icons">content_paste</i>
                                    <p>View Entry Captured </p>
                                </a>
                           
                        </ul>
                    </div>

                <li class="nav-item sidebar-dropdown">
                    <a class="nav-link" href="add_admin">
                        <i class="material-icons">person</i>
                        <p>Administratr </p>
                    </a>
                    <div class="sidebar-submenu">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/">
                                    <i class="material-icons">content_paste</i>
                                    <p>Add Administratr</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/view_admin">
                                    <i class="material-icons">content_paste</i>
                                    <p>View Administratr </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-sub py-1" href="/view_admin">
                                    <i class="material-icons">content_paste</i>
                                    <p>Delete Administratr</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">User Profile</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">
                                    Stats
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div id="layoutSidenav_content">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright float-right">
                    CRIME MANAGEMENT SYSTEM &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                </div>
                <!-- your footer here -->
            </div>
        </footer>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
{{--<script src="{{ asset('js/jquery.datatables.min.js') }}"></script>--}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>


</body>

</html>
