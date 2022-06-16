<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Halaman Resepsionis </title>
    <!-- Favicon icon -->
    <link rel="icon" type="../../resep/image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="../../resep/./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../resep/./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="../../resep/./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="../../resep/./css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header d-flex justify-content-center align-items-center">
            {{-- <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="../../resep/./images/logo.png" alt="">
                <img class="logo-compact" src="../../resep/./images/logo-text.png" alt="">
                <img class="brand-title" src="../../resep/./images/logo-text.png" alt="">
            </a> --}}
            <p  style="text-align: center; margin-bottom:0 !important;">Hotel Hebat</p>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="input-group">
                                    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="get" action="/receptionist/dashboard">
                                        @csrf
                                        <input class="form-control" type="date" aria-describedby="btnNavbarSearch" name="filter">
                                        <button class="btn btn-primary" id="btnNavbarSearch" type="submit">Cari</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    
                                    <a href="./page-login.html" class="dropdown-item">
                                       
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();" class="dropdown-item"><i class="icon-key"></i> Log out</a>
                                        </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Halaman Resepsionis</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Data Pemesanan</span></a>
                        {{-- <ul aria-expanded="false">
                            <li><a href="{{ route('user.dashboard') }}">Pemesanan</a></li>
                            
                        </ul> --}}
                    </li>
                </ul>
            </div>

        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        {{-- content --}}
        <div class="content-body">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                {{-- <i class="fas fa-table me-1"></i> --}}
                                Data Reservasi
                            </div>
                            <div class="card-body">
                                <form method="POST"> 
                                    <table id="datatablesSimple" class="table table-responsive " style="width: 800%" >
                                        <thead >
                                            <tr>
                                                <th>Nama Tamu</th>
                                                <th>Tanggal Check In</th>
                                                <th>Tanggal Check Out</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach( $reservations as $reservation )
                                            <tr>
                                                <td>{{ $reservation->nama_tamu }}</td>
                                                <td>{{ $reservation->tgl_check_in }}</td>
                                                <td>{{ $reservation->tgl_check_out }}</td>
                                                <td>
                                                    @if(date('Y-m-d') < $reservation['tgl_check_in']) Booking @elseif(date('Y-m-d')>= $reservation['tgl_check_in'] && date('Y-m-d') < $reservation['tgl_check_out']) Check In @elseif(date('Y-m-d')>= $reservation['tgl_check_out'])
                                                            Check Out
                                                            @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> 
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../../resep/./vendor/global/global.min.js"></script>
    <script src="../../resep/./js/quixnav-init.js"></script>
    <script src="../../resep/./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="../../resep/./vendor/raphael/raphael.min.js"></script>
    <script src="../../resep/./vendor/morris/morris.min.js"></script>


    <script src="../../resep/./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../resep/./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="../../resep/./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="../../resep/./vendor/flot/jquery.flot.js"></script>
    <script src="../../resep/./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="../../resep/./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="../../resep/./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="../../resep/./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="../../resep/./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="../../resep/./js/dashboard/dashboard-1.js"></script>

</body>

</html>