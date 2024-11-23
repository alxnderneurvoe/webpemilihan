<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>UKM POLICY - Pemilihan Ketum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UKM POLICY - Pemilihan Ketum" />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<!-- body start -->

<body data-menu-color="light" data-sidebar="default" <!-- Begin page -->
    <div id="app-layout">


        <!-- Topbar Start -->
        <div class="topbar-custom">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                        <li>
                            <button class="button-toggle-menu nav-link">
                                <i data-feather="menu" class="noti-icon"></i>
                            </button>
                        </li>

                    </ul>

                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">



                        <li class="d-none d-sm-flex">
                            <button type="button" class="btn nav-link" data-toggle="fullscreen">
                                <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                            </button>
                        </li>





                    </ul>
                </div>

            </div>

        </div>
        <!-- end Topbar -->

        <!-- Left Sidebar Start -->
        <div class="app-sidebar-menu">
            <div class="h-100" data-simplebar>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <div class="logo-box">
                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="24">
                            </span>
                        </a>
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="24">
                            </span>
                        </a>
                    </div>

                    <ul id="side-menu">

                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="index.php">
                                <i data-feather="home"></i>
                                <span> Dashboard </span>

                            </a>

                        </li>


                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

            <?php
            require_once 'proses/koneksi.php';
            $hasil = [];
            $query4 = mysqli_query($conn, "SELECT SUM(dipilih) FROM kandidat");
            $cek4 = mysqli_fetch_array($query4);
            if ($cek4[0] > 0) {
                $query3 = mysqli_query($conn, "SELECT * FROM kandidat WHERE dipilih = (SELECT MAX(dipilih) FROM kandidat);");
                if ($query3) {
                    while ($row3 = mysqli_fetch_array($query3)) {
                        $hasil = $row3;
                    }
                }
            }
            ?>
            

                <div class="container-fluid">
                    <div class="row justify-content-center m-3" id="kandidatContainer">
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-header text-center bg-primary">
                                    <h3 class="text-white">🎉 Selamat kepada Ketua Umum Terpilih! 🎉</h3>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <img src="proses/uploads/<?php echo $hasil['photo'] ?>" class="card-img-top rounded"
                                        alt="Muhammad Rafli"
                                        style="width: 100%; max-width: 400px; height: 400px; object-fit: cover;">
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="text-black fw-bold"><?php echo strtoupper($hasil['name']); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col fs-13 text-muted text-center">
                            &copy;
                            <span
                            class="text-reset fw-semibold">UKM-POLICY 2024</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <!-- Apexcharts JS -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- for basic area chart -->
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>

    <!-- Widgets Init Js -->
    <script src="assets/js/pages/crm-dashboard.init.js"></script>

    <!-- App js-->
    <script src="assets/js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</body>

</html>