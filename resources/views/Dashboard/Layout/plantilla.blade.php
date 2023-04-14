<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SOFTWARE CMS</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ url('img/icon.png') }}" type="image/png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ url('css/fonts.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/atlantis.min.css') }}">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ url('css/demo.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    @yield('styles')

</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        New user registered
                                                    </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-success"> <i class="fa fa-comment"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Rahmad commented on Admin
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Farrah liked Admin
                                                    </span>
                                                    <span class="time">17 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all notifications<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header">
                                    <span class="title mb-1">Quick Actions</span>
                                    <span class="subtitle op-8">Shortcuts</span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="row m-0">
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-file-1"></i>
                                                    <span class="text">Generated Report</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-database"></i>
                                                    <span class="text">Create New Database</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-pen"></i>
                                                    <span class="text">Create New Post</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-interface-1"></i>
                                                    <span class="text">Create New Task</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-list"></i>
                                                    <span class="text">Completed Tasks</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-file"></i>
                                                    <span class="text">Create New Invoice</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="{{ asset('img/avatar_default.png') }}" alt="avatar" class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <span>{{ auth()->user()->name }}</span>
                                    <span>{{ auth()->user()->email }}</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#">
                                            <span class="link-collapse">Mi Perfil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="link-collapse">Editar Perfil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('logout') }}">
                                            <span class="link-collapse">Salir</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Sub Menu -->
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="{{ url('/inicio') }}">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                    <!-- End Sub Menu -->
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient text-capitalize">
                    <div class="page-inner py-5">
                        @yield('page-inner')
                    </div>
                </div>
                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright ml-auto">
                        Copyright © 2022, powered by <a href="tel:+57 3114360830">jhonatan fernandez</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="modal fade" id="help">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Repositorio de Ayuda</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!--   Core JS Files   -->
    <script src="{{ url('js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ url('js/core/popper.min.js') }}"></script>
    <script src="{{ url('js/core/bootstrap.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ url('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ url('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ url('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ url('js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ url('js/atlantis.min.js') }}"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{ url('js/setting-demo.js') }}"></script>


    <!-- Chart Circle -->
    <script src="{{ url('js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Fonts and icons -->
    <script src="{{ url('js/plugin/webfont/webfont.min.js') }}"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <script>
        $(document).ready(function() {
            $('table').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
                },
                "lengthMenu": [
                    [5, 10, -1],
                    [5, 10, "Todos"]
                ]
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
