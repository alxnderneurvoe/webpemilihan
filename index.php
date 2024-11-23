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
                                <p>UKM POLICY</p>
                                <p>2024</p>
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
                    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
                        </div>
                    </div>

                    <!-- Start Monthly Sales -->
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h5 class="card-title text-black mb-0">Bakal Calon Ketua Umum</h5>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <ul id="kandidat-list" class="list-group list-group-flush list-group-no-gutters">

                                        <?php
                                        require_once 'proses/koneksi.php';
                                        $no = 1;
                                        $query1 = mysqli_query($conn, "SELECT * FROM kandidat");
                                        while ($row = mysqli_fetch_array($query1)) {
                                            ?>
                                                <!-- List Item -->
                                                <li class="list-group-item">
                                                <div class="d-flex justify-content-between">

                                                    <div class="flex-grow-0 align-self-center me-3">
                                                        <span>
                                                            <?php echo $no++ ?>.
                                                        </span>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <!-- Avatar -->
                                                        <div
                                                            class="align-content-center text-center border border-dashed rounded-circle p-1">
                                                            <img src="proses/uploads/<?php echo $row['photo'] ?>"
                                                                class="avatar avatar-sm rounded-circle" style="object-fit: cover;">
                                                        </div>
                                                        <!-- End Avatar -->
                                                    </div>

                                                    <div class="flex-grow-1 ms-3 align-content-center">
                                                        <div class="row">
                                                            <div class="col-7 col-md-5">
                                                                <h6 class="mb-1 text-black fs-15">
                                                                    <?php echo $row['name'] ?>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>

                                                    <div class="flex-grow-2 ms-3 align-content-center">
                                                        <div class="btn btn-sm btn-danger" data-bs-toggle="tooltip"
                                                            data-bs-original-title="Delete"
                                                            onclick="hapusKandidat(<?php echo $row['id'] ?>)">
                                                            <a aria-label="anchor" class="">
                                                                <i class="mdi mdi-delete fs-16 text-white"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                                </li>
                                        <?php } ?>

                                        <li class="list-group-item">
                                            <div class="col-12">
                                                <button class="btn btn-primary col-12" id="TambahKandidat"><i
                                                        class="mdi mdi-plus fs-16 text-white"></i> Tambah
                                                    Kandidat</button>
                                            </div>
                                        </li>
                                        <!-- End List Item -->


                                    </ul>
                                </div>
                            </div>
                        </div>


                        <script>
                            document.getElementById('TambahKandidat').addEventListener('click', function () {
                                Swal.fire({
                                    title: 'Tambah Kandidat',
                                    html: `
                                    <input type="text" id="name" class="form-control" placeholder="Nama Lengkap">
                                    <br>
                                    <input type="file" id="photo" class="form-control" accept="image/*">
                                `,
                                    showCancelButton: true,
                                    confirmButtonText: 'Submit',
                                    cancelButtonText: 'Batal',
                                    preConfirm: () => {
                                        const name = Swal.getPopup().querySelector('#name').value;
                                        const photo = Swal.getPopup().querySelector('#photo').files[0];

                                        if (!name) {
                                            Swal.showValidationMessage('Nama harus diisi!');
                                        } else if (!photo) {
                                            Swal.showValidationMessage('Foto harus diupload!');
                                        } else {
                                            return { name: name, photo: photo };
                                        }
                                    }
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        const name = result.value.name;
                                        const photoFile = result.value.photo;

                                        // Kirim data ke server
                                        const formData = new FormData();
                                        formData.append('name', name);
                                        formData.append('photo', photoFile);

                                        fetch('proses/tambah_kandidat.php', {
                                            method: 'POST',
                                            body: formData
                                        })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.success) {
                                                    Swal.fire({
                                                        title: 'Data Berhasil Disimpan',
                                                        text: 'Kandidat berhasil ditambahkan!',
                                                        icon: 'success'
                                                    }).then(() => {
                                                        location.reload(); // Muat ulang halaman setelah konfirmasi
                                                    });
                                                } else {
                                                    Swal.fire({
                                                        title: 'Error',
                                                        text: data.message || 'Gagal menyimpan data!',
                                                        icon: 'error'
                                                    });
                                                }
                                            })
                                            .catch(error => {
                                                console.error('Error:', error);
                                                Swal.fire({
                                                    title: 'Error',
                                                    text: 'Terjadi kesalahan saat menyimpan data!',
                                                    icon: 'error'
                                                });
                                            });
                                    }
                                });
                            });
                        </script>



                        <script>
                            function hapusKandidat(id) {
                                // Menampilkan konfirmasi penghapusan
                                Swal.fire({
                                    title: 'Yakin ingin menghapus kandidat ini?',
                                    text: "Data kandidat akan dihapus secara permanen!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya, hapus!',
                                    cancelButtonText: 'Batal'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Jika user mengkonfirmasi, kirimkan permintaan ke hapus_kandidat.php
                                        fetch('proses/hapus_kandidat.php', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/x-www-form-urlencoded'
                                            },
                                            body: 'id=' + encodeURIComponent(id) // Kirimkan ID kandidat
                                        })
                                            .then(response => response.json()) // Parsing respons JSON
                                            .then(data => {
                                                if (data.success) {
                                                    Swal.fire({
                                                        title: 'Berhasil',
                                                        text: data.message,
                                                        icon: 'success'
                                                    }).then(() => {
                                                        location.reload(); // Reload halaman jika penghapusan berhasil
                                                    });
                                                } else {
                                                    Swal.fire({
                                                        title: 'Gagal',
                                                        text: data.message,
                                                        icon: 'error'
                                                    });
                                                }
                                            })
                                            .catch(error => {
                                                console.error('Error:', error);
                                                Swal.fire({
                                                    title: 'Error',
                                                    text: 'Terjadi kesalahan saat menghubungi server.',
                                                    icon: 'error'
                                                });
                                            });
                                    }
                                });
                            }

                        </script>


                        <script>
                            function resetKandidat() {
                                // Menampilkan konfirmasi sebelum mengatur ulang kandidat
                                Swal.fire({
                                    title: 'Yakin ingin mengatur ulang hasil pemilihan?',
                                    text: "Status pilihan semua kandidat akan di-reset.",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Ya, atur ulang!',
                                    cancelButtonText: 'Batal'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Jika user mengkonfirmasi, kirimkan permintaan ke update_kandidat.php
                                        fetch('proses/reset_pemilihan.php', {
                                            method: 'POST'
                                        })
                                            .then(response => response.json()) // Parsing respons JSON
                                            .then(data => {
                                                if (data.success) {
                                                    Swal.fire({
                                                        title: 'Berhasil',
                                                        text: data.message,
                                                        icon: 'success'
                                                    }).then(() => {
                                                        location.reload(); // Muat ulang halaman setelah konfirmasi
                                                    });
                                                } else {
                                                    Swal.fire({
                                                        title: 'Gagal',
                                                        text: data.message,
                                                        icon: 'error'
                                                    });
                                                }
                                            })
                                            .catch(error => {
                                                console.error('Error:', error);
                                                Swal.fire({
                                                    title: 'Error',
                                                    text: 'Terjadi kesalahan saat menghubungi server.',
                                                    icon: 'error'
                                                });
                                            });
                                    }
                                });
                            }

                        </script>


                        <!-- HASIL -->
                        <div class="col-xl-12 mb-3">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button fw-medium" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Lihat Hasil Pemilihan
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <div class="card overflow-hidden ">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5 class="card-title text-black mb-0">Hasil Pemilihan</h5>
                                                        <a href="#" onclick="resetKandidat()"
                                                            class="btn btn-danger">Reset</a>
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xxl-6">
                                                             <div id="kandidatChart" style="width: 60%; margin: auto;"></div>
                                                        </div>

                                                       <script>
                                                            // Fungsi untuk mengambil data dari server
                                                            async function fetchKandidatData() {
                                                                const response = await fetch('proses/get_data_kandidat.php'); // Ambil data dari PHP
                                                                const data = await response.json();
                                                                return data;
                                                            }

                                                            // Fungsi untuk menginisialisasi Pie Chart
                                                            async function renderPieChart() {
                                                                const kandidatData = await fetchKandidatData();

                                                                // Memisahkan data menjadi labels dan values
                                                                const labels = kandidatData.map(item => item.name);
                                                                const series = kandidatData.map(item => item.dipilih);

                                                                const options = {
                                                                    chart: {
                                                                        type: 'pie',
                                                                        height: '400px'
                                                                    },
                                                                    series: series, // Data jumlah dipilih
                                                                    labels: labels, // Nama kandidat
                                                                    title: {
                                                                        text: 'Grafik Persentase Terpilih Setiap Kandidat',
                                                                        align: 'center'
                                                                    },
                                                                    legend: {
                                                                        position: 'bottom'
                                                                    }
                                                                };

                                                                // Render chart ke dalam container dengan ID "kandidatChart"
                                                                const chart = new ApexCharts(document.querySelector("#kandidatChart"), options);
                                                                chart.render();
                                                            }

                                                            // Panggil fungsi renderPieChart untuk menampilkan grafik
                                                            renderPieChart();
                                                        </script>

                                                        <div class="col-xxl-6 align-self-center">
                                                            <h3 class="fs-18 fw-semibold text-black mb-3">Data Statistic
                                                            </h3>
                                                            <ul id="statistik" class="list-unstyled mb-0">

                                                                <?php
                                                                $totalsuara = 0;
                                                                $query2 = mysqli_query($conn, "SELECT * FROM kandidat");
                                                                while ($row2 = mysqli_fetch_array($query2)) {
                                                                    $totalsuara += $row2['dipilih'];
                                                                    ?>
                                                                            <li class="list-item mb-2 align-self-center">
                                                                                <div
                                                                                    class="row fs-15">
                                                                                    <div class="col-12 col-md-6">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="20" height="20"
                                                                                            viewBox="0 0 16 16" class="me-0">
                                                                                            <path fill="#2786f1"
                                                                                                d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5" />
                                                                                        </svg>
                                                                                        <span class="text-black fw-normal">
                                                                                            <?php echo $row2['name'] ?>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="col-12 col-md-6">
                                                                                        <p class="mb-0 text-muted">
                                                                                        <?php echo $row2['dipilih'] ?> Suara
                                                                                    </p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                <?php } ?>


                                                            </ul>

                                                            <h3 class="fs-18 fw-semibold text-black mt-3 d-flex"><div class="text-primary me-2"><?php echo $totalsuara; ?></div> Total Suara
                                                            </h3>
                                                            <br>
                                                            <?php if ($totalsuara > 0) { ?>
                                                                <a href="terpilih.php" class="btn btn-primary col-12">Lihat Kandidat Terpilih</a>
                                                            <?php } ?>
                                                            
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- HASIL -->

                        <!-- BUTTON MULAI -->
                        <div class="col-xl-12">
                            <a href="pemilihan.php" class="btn btn-lg btn-secondary col-12"> Mulai Pemilihan <i
                                    class="mdi mdi-arrow-right fs-16 text-white"></i></a>
                        </div>
                        <!-- BUTTON MULAI -->

                    </div>
                    <!-- End Monthly Sales -->



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