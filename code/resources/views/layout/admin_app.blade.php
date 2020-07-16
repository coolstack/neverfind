<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Admin | @yield('title')</title>
    <link rel="apple-touch-icon" href="{{URL::asset('admin_asset/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('admin_asset/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">



    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/vendors/css/extensions/tether-theme-arrows.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/vendors/css/extensions/tether.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/vendors/css/extensions/shepherd-theme-default.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/plugins/file-uploaders/dropzone.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/pages/data-list-view.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Page CSS-->

    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/pages/dashboard-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/pages/card-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/app-assets/css/plugins/tour/tour.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('admin_asset/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{URL::asset('admin_asset/app-assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{URL::asset('admin_asset/app-assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{URL::asset('admin_asset/app-assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{URL::asset('admin_asset/app-assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="{{URL::asset('admin_asset/app-assets/images/portrait/small/avatar-s-8.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="{{URL::asset('admin_asset/app-assets/images/portrait/small/avatar-s-1.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="{{URL::asset('admin_asset/app-assets/images/portrait/small/avatar-s-14.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="{{URL::asset('admin_asset/app-assets/images/portrait/small/avatar-s-6.jpg')}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{URL::asset('admin_asset/html/ltr/vertical-menu-template/index.html')}}">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Admin</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>Cleaning Service</span>
                </li>
                <li class=" nav-item"><a href="/admin/orderlist"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">Order List</span></a>
                </li>
                <li class=" nav-item"><a href="/admin/logout"><span class="menu-title" data-i18n="Email">Log out</span></a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- Begin Content -->
    <div>
        @yield('content')
    </div>
    <!-- End Content -->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{URL::asset('admin_asset/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{URL::asset('admin_asset/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{URL::asset('admin_asset/app-assets/vendors/js/extensions/tether.min.js')}}"></script>
    <script src="{{URL::asset('admin_asset/app-assets/vendors/js/extensions/shepherd.min.js')}}"></script>
    <script src="{{URL::asset('admin_asset/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{URL::asset('admin_asset/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{URL::asset('admin_asset/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('admin_asset/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('admin_asset/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('admin_asset/app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
    <script src="{{URL::asset('admin_asset/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{URL::asset('admin_asset/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{URL::asset('admin_asset/app-assets/js/core/app.js')}}"></script>
    <script src="{{URL::asset('admin_asset/app-assets/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{URL::asset('admin_asset/app-assets/js/scripts/ui/data-list-view.js')}}"></script>
    <!-- END: Page JS-->



</body>
<!-- END: Body-->

</html>