<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href={{ asset('vendors/mdi/css/materialdesignicons.min.css') }} />
    <link rel="stylesheet" href={{ asset('vendors/ti-icons/css/themify-icons.css') }}>
    <link rel="stylesheet" href={{ asset('vendors/css/vendor.bundle.base.css') }}>
    <link rel="stylesheet" href={{ asset('vendors/font-awesome/css/font-awesome.min.css') }} />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{ asset('vendors/font-awesome/css/font-awesome.min.css') }} />
    <link rel="stylesheet" href={{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }} />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href={{ asset('css/style.css') }} />
    <!-- End layout styles -->
    <link rel="shortcut icon" href={{ asset('images/favicon.png') }} />
</head>

<body>
    <div class="container-scroller">
       
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo" href="index.html"><img src={{ asset('images/logo.svg') }}
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src={{ asset('images/logo-mini.svg') }}
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0"
                                placeholder="Search projects">
                        </div>
                    </form>
                </div>
             
         
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                  
                    <li class="nav-item">
                        <a class="nav-link" href={{ url('/') }}>
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Invoice</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href={{url('/add-vendor')}}>Create</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/dropdowns.html">List</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-customer" aria-expanded="false"
                            aria-controls="ui-customer">
                            <span class="menu-title">Customer</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-customer">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/buttons.html">Add</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/dropdowns.html">List</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-Vendor" aria-expanded="false"
                            aria-controls="ui-Vendor">
                            <span class="menu-title">Vendor</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-Vendor">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/buttons.html">Add</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/dropdowns.html">List</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    {{ $slot }}
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a
                                href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src={{ asset('vendors/js/vendor.bundle.base.js') }}></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src={{ asset('vendors/chart.js/chart.umd.js') }}></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src={{ asset('js/off-canvas.js') }}></script>
    <script src={{ asset('js/misc.js') }}></script>
    <script src={{ asset('js/settings.js') }}></script>
    <script src={{ asset('js/todolist.js') }}></script>
    <script src={{ asset('js/jquery.cookie.js') }}></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src={{ asset('js/dashboard.js') }}></script>
    <!-- End custom js for this page -->
</body>

</html>
