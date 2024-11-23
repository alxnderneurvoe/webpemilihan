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
    <style>
        /* Membuat gambar dalam card menjadi persegi dan responsif */
        .card-img-top {
            object-fit: cover;
            width: 100%;
            aspect-ratio: 1 / 1;
            /* Membuat rasio gambar 1:1 */
        }
    </style>
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

                <!-- Start Content-->
                <div class="container-fluid">

                    <br>

                    <?php
                    require_once 'proses/koneksi.php';
                    $queryjumlah = mysqli_query($conn, "SELECT SUM(dipilih) FROM kandidat");
                    $row = mysqli_fetch_array($queryjumlah);
                    $jumlah_suara = 0;
                    if ($queryjumlah) {
                        $jumlah_suara += $row[0];
                    }
                    ?>

                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title mb-0">PILIH KANDIDAT</h5>
                                    <div class="d-flex">
                                        <b>
                                            <h2 class="card-title mb-0 me-2 text-primary" id="jumlah_suara"><?php echo $jumlah_suara; ?></h2>
                                        </b>
                                        <h2 class="card-title mb-0">Total Jumlah Suara</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="kandidatContainer"></div>
                    </div>

                    <script>
                        // Fungsi untuk mengambil data kandidat dari server
                        async function fetchKandidatData() {
                            const response = await fetch('proses/get_data_kandidat.php');
                            const data = await response.json();
                            return data;
                        }

                        // Fungsi untuk menampilkan kandidat dalam bentuk card
                        async function displayKandidat() {
                            const kandidatContainer = document.getElementById('kandidatContainer');
                            const kandidatData = await fetchKandidatData();

                            kandidatData.forEach((kandidat) => {
                                const card = document.createElement('div');
                                card.className = 'col-md-4 mb-4'; // Mengatur 3 card per baris di layar medium dan besar
                                card.innerHTML = `
                    <div class="card" style="cursor: pointer;" onclick="pilihKandidat(${kandidat.id}, '${kandidat.name}')">
                        <img src="proses/uploads/${kandidat.photo}" class="card-img-top rounded" alt="${kandidat.name}" style="overflow:hidden; height:100;">
                        <div class="card-body text-center">
                            <b><h3 class="text-black">${kandidat.name.toUpperCase()}</h3></b>
                        </div>
                    </div>
                `;
                                kandidatContainer.appendChild(card);
                            });
                        }

                        // Fungsi untuk memilih kandidat dan menambah suara
                        function pilihKandidat(id, name) {
                            Swal.fire({
                                title: `Pilih ${name}?`,
                                text: "Apakah Anda yakin ingin memilih kandidat ini?",
                                icon: 'question',
                                showCancelButton: true,
                                confirmButtonText: 'Ya, pilih!',
                                cancelButtonText: 'Batal'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Mengirimkan request AJAX tanpa berpindah halaman
                                    fetch(`proses/tambah_suara.php?id=${id}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            // Menampilkan pesan berdasarkan status dari server
                                            if (data.status === 'success') {
                                                Swal.fire('Sukses!', data.message, 'success')
                                                    .then(() => {
                                                        let jumlah_suara = parseInt(document.getElementById(`jumlah_suara`).innerText) || 0;
                                                        document.getElementById(`jumlah_suara`).innerText = jumlah_suara + 1;
                                                    });
                                            } else {
                                                Swal.fire('Gagal!', data.message, 'error');
                                            }
                                        })
                                        .catch(error => {
                                            Swal.fire('Gagal!', 'Terjadi kesalahan, coba lagi nanti.', 'error');
                                        });
                                }
                            });
                        }





                        // Menampilkan kandidat ketika halaman selesai dimuat
                        document.addEventListener('DOMContentLoaded', displayKandidat);
                    </script>





                </div> <!-- container-fluid -->
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