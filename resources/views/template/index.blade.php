<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="keyword" content="Portal Masjid Baiturrahman, Pembayaran Zakat, Masjid Baiturrahman, Taman Senopati, Villa Permata Cikampek"/>
        <meta name="author" content="Pemuda Baiturrahman - Levind Sein, Eki, Fahni"/>
        <meta name="description"content="Pembayaran Zakat Fitrah dan Maal" />
        <meta property="og:site_name" content="Masjid Baiturrahman">
        <meta property="og:title" content="Masjid Baiturrahman" />
        <meta property="og:description" content="Pembayaran Zakat Fitrah dan Maal" />
        <meta property="og:image" itemprop="image" content="{{asset($Gsetting->favicon)}}">
        <meta property="og:type" content="website" />
        <link rel="shortcut icon" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="16x16 32x32 64x64" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="196x196" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="160x160" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="96x96" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="64x64" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="32x32" href="{{asset($Gsetting->favicon)}}">
        <link rel="icon" sizes="16x16" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset($Gsetting->favicon)}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset($Gsetting->favicon)}}">
        <meta name="google" content="notranslate">
        <meta name="robots" content="noindex, nofollow" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset($Gsetting->favicon)}}">
        <title>@yield('content-title') | {{$Gsetting->title}}</title>

        <script src="{{asset('template/assets/libs/jquery/dist/jquery.min.js')}}"></script>

        <!-- Custom CSS -->
        <link href="{{asset('template/dist/css/style.min.css')}}" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/all.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('vendor/fontawesomepro/css/all.min.css')}}" type="text/css">

        {{-- Toastr --}}
        <link rel="stylesheet" type="text/css" href="{{asset('home/login/toastr.min.css')}}">
        <script src="{{asset('home/login/toastr.min.js')}}"></script>
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a
                            class="nav-toggler waves-effect waves-light d-block d-md-none"
                            href="javascript:void(0)">
                            <i class="ti-menu ti-close"></i>
                        </a>
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <a class="navbar-brand" href="#">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="{{asset($Gsetting->logo_img)}}" width="60" height="40" class="dark-logo"/>
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{asset($Gsetting->logo_text)}}" width="90" height="20" class="dark-logo"/>
                            </span>
                        </a>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->
                        <a
                            class="topbartoggler d-block d-md-none waves-effect waves-light"
                            href="javascript:void(0)"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block">
                                <a
                                    class="nav-link sidebartoggler waves-effect waves-light"
                                    href="javascript:void(0)"
                                    data-sidebartype="mini-sidebar">
                                    <i class="mdi mdi-menu font-24"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">
                            <!-- ============================================================== -->
                            <!-- Comment -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle waves-effect waves-dark"
                                    href=""
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="mdi mdi-bell font-24"></i>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox animated fadeIn">
                                    <span class="with-arrow">
                                        <span class="bg-primary"></span></span>
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="drop-title bg-primary text-white">
                                                <h4 class="mb-0 mt-1">(Angka) (Baru)</h4>
                                                <span class="font-light">Notifikasi</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="message-center notifications">
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item">
                                                    <span class="btn btn-danger btn-circle">
                                                        <i class="fa fa-link"></i>
                                                    </span>
                                                    <div class="mail-contnet">
                                                        <h5 class="message-title">(Judul Notif)</h5>
                                                        <span class="mail-desc">(Just see the my new admin!)</span>
                                                        <span class="time">(9:30 AM)</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="nav-link text-center mb-1 text-dark" href="javascript:void(0);">
                                                <strong>Semua Notifikasi</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Comment -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                    href=""
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"><img
                                    src="{{Auth::user()->foto}}"
                                    alt="user"
                                    class="rounded-circle"
                                    width="31"></a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated fadeIn">
                                    <span class="with-arrow">
                                        <span class="bg-primary"></span></span>
                                    <div class="d-flex no-block align-items-center p-15 bg-primary text-white mb-2">
                                        <div class=""><img
                                            src="{{Auth::user()->foto}}"
                                            alt="user"
                                            class="img-circle"
                                            width="60"></div>
                                        <div class="ml-2">
                                            <h4 class="mb-0">{{Auth::user()->name}}</h4>
                                            <p class=" mb-0">{{Auth::user()->email}}</p>
                                            <p class=" mb-0">{{Auth::user()->telephone}}</p>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="{{url('profil')}}">
                                        <i class="ti-user mr-1 ml-1"></i>
                                        Profil
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{url('logout')}}">
                                        <i class="fa fa-power-off mr-1 ml-1"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="p-15 mt-1">
                                @if(Auth::user()->level != 3)
                                <a
                                    href="javascript:void(0)"
                                    class="btn btn-block create-btn text-white no-block d-flex align-items-center">
                                    <i class="fa fa-plus-square"></i>
                                    <span class="hide-menu ml-1">&nbsp;Tambah&nbsp;Baru</span>
                                </a>
                                @endif
                                <a
                                    href="javascript:void(0)"
                                    class="btn btn-block create-btn text-white no-block d-flex align-items-center">
                                    <i class="fas fa-sack"></i>
                                    <span class="hide-menu ml-1">&nbsp;Bayar&nbsp;Zakat</span>
                                </a>
                            </li>
                            @if(Auth::user()->level != 3)
                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{url('dashboard')}}"
                                    aria-expanded="false">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{url('#')}}"
                                    aria-expanded="false">
                                    <i class="mdi mdi-account-check"></i>
                                    <span class="hide-menu">Muzakki</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{url('#')}}"
                                    aria-expanded="false">
                                    <i class="mdi mdi-account-convert"></i>
                                    <span class="hide-menu">Mustahik</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{url('rumusan')}}"
                                    aria-expanded="false">
                                    <i class="mdi mdi-math-compass"></i>
                                    <span class="hide-menu">Rumusan</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{url('#')}}"
                                    aria-expanded="false">
                                    <i class="mdi mdi-package-variant"></i>
                                    <span class="hide-menu">Transaksi</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{url('#')}}"
                                    aria-expanded="false">
                                    <i class="mdi mdi-cube-send"></i>
                                    <span class="hide-menu">Distribusi</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{url('#')}}"
                                    aria-expanded="false">
                                    <i class="mdi mdi-book"></i>
                                    <span class="hide-menu">Pembukuan</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{url('pengaturan_umum')}}"
                                    aria-expanded="false">
                                    <i class="mdi mdi-settings"></i>
                                    <span class="hide-menu">Pengaturan&nbsp;Umum</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{url('#')}}"
                                    aria-expanded="false">
                                    <i class="mdi mdi-account"></i>
                                    <span class="hide-menu">User</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{url('#')}}"
                                    aria-expanded="false">
                                    <i class="mdi mdi-account-search"></i>
                                    <span class="hide-menu">Riwayat&nbsp;Login</span>
                                </a>
                            </li>
                            @endif
                            <li class="nav-small-cap"></li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-5 align-self-center">
                            <h4 class="page-title">@yield('content-title')</h4>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    @yield('content-body')
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <br>
                <footer class="footer text-center">
                    {!! html_entity_decode($Gsetting->footer) !!}
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{asset('template/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('template/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- apps -->
        <script src="{{asset('template/dist/js/app.min.js')}}"></script>
        <script src="{{asset('template/dist/js/app.init.js')}}"></script>
        <script src="{{asset('template/dist/js/app-style-switcher.js')}}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{asset('template/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
        <script src="{{asset('template/assets/extra-libs/sparkline/sparkline.js')}}"></script>
        <!--Wave Effects -->
        <script src="{{asset('template/dist/js/waves.js')}}"></script>
        <!--Menu sidebar -->
        <script src="{{asset('template/dist/js/sidebarmenu.js')}}"></script>
        <!--Custom JavaScript -->
        <script src="{{asset('template/dist/js/custom.js')}}"></script>

        <script src="{{asset('custom.js')}}"></script>

        @include('message.toastr')

        @yield('content-js')
    </body>

</html>
