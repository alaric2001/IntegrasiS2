<!DOCTYPE html>
<html lang="en" class="dark">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') Inalum</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- sweetalert2 style -->
        <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css')}}">
        <!-- dataTables-bs4 style -->
        <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <!-- dataTables-buttons style -->
        <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
        <!-- dataTables-responsive style -->
        <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <!-- Toastr style -->
        <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css')}}">
        <!-- tempusdominus style -->
        <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4css/tempusdominus-bootstrap-4.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <style>
            /* dark mode dropdown dataTables*/
            div.dt-button-collection {
                background-color: #343a40;
            }

            div.info-box {
                background-color: #2f3439 !important;
            }

            a {
                cursor: pointer;
            }

            .logo-xl.brand-image-xs {
                left: 25%;
            }
            .table td.fit,
            .table th.fit {
                white-space: nowrap;
                width: 1%;
            }
        </style>
    </head>

    <body class="hold-transition sidebar-mini dark-mode">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        {{-- Home Button --}}
                        <a href="/" class="nav-link">Home</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Notifications Dropdown Menu -->
                    <li id="notification" class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li id="fullscreenBtn-navbar" class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="/" id="logo" class="brand-link logo-switch mx-auto text-center">
                    <img src="Inalum Logo.png" alt="AdminLTE Docs Logo Small" class="brand-image-xl logo-xs">
                    <img src="Inalum logo text.png" alt="AdminLTE Docs Logo Large" class="brand-image-xs logo-xl">
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="/profile" class="d-block">Shobrun Jamil</a>
                        </div>
                    </div>

                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="/" class="nav-link">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Home</p>
                                </a>
                            </li>
                            <li class="nav-item menu-open">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tools"></i>
                                    <p>
                                        Equipment
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/eqdashboard" class="nav-link">
                                            <p>Dashboard</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/conveyor" class="nav-link">
                                            <p>Conveyor</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/ultrasonic" class="nav-link active">
                                            <p>Ultrasonic</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/activity" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Activity</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/inspection" class="nav-link">
                                    <i class="nav-icon fas fa-poll-h"></i>
                                    <p>Inspection</p>
                                </a>
                            </li>
                            <li class="nav-item menu-open">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        User
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/setting" class="nav-link">
                                            <i class="fas fa-wrench nav-icon ml-3"></i>
                                            <p>Setting</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#logout" class="nav-link">
                                            <i class="fas fa-power-off nav-icon ml-3"></i>
                                            <p>Log out</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- <li class="nav-item menu-open">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Master Data
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item menu-open">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                            <p>
                                                Equipment
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="fas fa-wrench nav-icon ml-3"></i>
                                                    <p>Equipment Type</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="fas fa-power-off nav-icon ml-3"></i>
                                                    <p>Log out</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fas fa-power-off nav-icon ml-3"></i>
                                            <p>Equipment Type</p>
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="mx-2 font-weight-bold">@yield('header')</h1>
                            </div>
                            <div class="col-sm-6 text-right">
                                @yield('additional-header')
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <div class="content">
                    @yield('content')
                </div>
            </div>

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- Right Footer -->
                <div class="float-right d-none d-sm-inline">
                    By Kelompok 5
                </div>
                <!-- left Footer -->
                <strong>Copyright &copy; 2023 <a href="https://www.inalum.id/">Inalum</a></strong> All rights
                reserved.
            </footer>
        </div>

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- sweetalert2 JS -->
        <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
        <!-- toastr JS -->
        <script src="{{ asset('plugins/toastr/toastr.min.js')}}"></script>
        <!-- moment JS -->
        <script src="{{ asset('plugins/moment/moment-with-locales.min.js')}}"></script>
        <!-- moment JS -->
        <script src="{{ asset('plugins/moment/locale/id.js')}}"></script>
        <!-- tempusdominus JS -->
        <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        {{-- <!-- dataTables JS -->
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables-bs4/js/dataTables-bootstrap4.min.js')}}"></script>
        <!-- dataTables-responsive JS -->
        <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <!-- dataTables-buttons JS -->
        <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <!-- dataTables-buttons-html JS -->
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <!-- dataTables-buttons-print JS -->
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <!-- dataTables-buttons-print JS -->
        <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script> --}}
        <script
            src="https://cdn.datatables.net/v/bs4/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/date-1.5.1/fc-4.3.0/fh-3.4.0/kt-2.11.0/r-2.5.0/rg-1.4.1/rr-1.4.1/sc-2.3.0/sb-1.6.0/sp-2.2.0/sl-1.7.0/sr-1.3.0/datatables.min.js">
        </script>
        <!-- jszip JS -->
        <script src="{{ asset('plugins/jszip/jszip.min.js')}}"></script>
        <!-- pdfmake JS -->
        <script src="{{ asset('plugins/pdfmake/pdfmake.min.js')}}"></script>

        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        @yield('additional-script')
        {{-- JS dataTables
        <script>
            $(document).ready(function() {
                $('#').DataTable({
                    responsive: true,
                    dom:
                        "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        {
                            extend:'csv',
                            text: 'Export CSV',
                            split:['excel', 'pdf']
                        },
                        {
                            extend:'print',
                            title:,
                            messageBottom:'Copyright© ' + new Date().getFullYear() + ' by Inalum'
                        }
                    ],
                    initComplete: function() {
                    $(".dataTables_filter input").addClass("form-control form-control-sm");
                    }
                });
            });
        </script> --}}
    </body>

</html>
