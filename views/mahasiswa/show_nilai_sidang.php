<?php
require '../../controllers/dosen_penguji_controllers/nilai_sidang_controller.php';

$conn = new dosenPenguji();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIHAT NILAI MAHASISWA </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="../../dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../dist/assets/css/app.css">
    <link rel="shortcut icon" href="../../dist/assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="../../dist/assets/images/logo/logo.jpg" style="width: 100px; height: 100px;" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>



                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Extra Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="extra-component-avatar.html">Avatar</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Layouts</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="layout-default.html">Default Layout</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-title">Forms &amp; Tables</li>

                        <li class="sidebar-item active has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Halaman Form </span>
                            </a>
                            <ul class="submenu active">
                                <li class="submenu-item active">
                                    <a href="input_judul_mahasiswa.php">Input Judul</a>
                                </li>
                                <li class="submenu-item active">
                                    <a href="tabel_jadwal_sidang.php">Tabel Jadwal Sidang Mahasiswa</a>
                                </li>
                                <li class="submenu-item active">
                                    <a href="show_nilai_sidang.php">Tabel Nilai Mahasiswa</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-input-group.html">Input Group</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last mb-10">
                            <h3>Admin / Dosen Penguji</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <div>Terakhir di kunjungi, <code>kemarin 20:22</code></div>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- start line table mahasiswa -->
                <form class="d-flex mb-10">
                    <input class="form-control me-2 w-25" type="search" placeholder="Cari data " aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search </button>
                </form>
                <!-- end line table mahasiswa -->

                <!-- Bordered table start -->
                <form method="post" action="">
                    <section class="section">
                        <div class="row" id="table-bordered">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Form Jadwal Mahasiswa</h4>
                                    </div>
                                    <div class="card-content p-3">
                                        <!-- table bordered -->
                                        <form method="post" action="">
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <thead class="text-center">
                                                        <tr class="px-lg-0 ">
                                                            <th>No</th>
                                                            <th>NAMA</th>
                                                            <th>NPM</th>
                                                            <th>JURUSAN</th>
                                                            <th>DOSEN PEMBIMBING 1</th>
                                                            <th>DOSEN PEMBIMBING 2</th>
                                                            <th>NILAI TOTAL</th>
                                                            <th>NILAI MUTU</th>
                                                        </tr>
                                                    </thead>
                                                    <?php $i = 1;
                                                    foreach ($conn->queryAll() as $mhs) : ?>
                                                        <tbody>
                                                            <tr>
                                                                <td> <?= $i++ ?> </td>
                                                                <td> <?= $mhs['nama_mahasiswa'] ?> </td>
                                                                <td class="text-bold-500"> <?= $mhs['npm'] ?> </td>
                                                                <td> <?= $mhs['jurusan']  ?> </td>
                                                                <td> <?= $mhs['dosen_pembimbing1'] ?> </td>
                                                                <td> <?= $mhs['dosen_pembimbing2'] ?> </td>
                                                                <td> <?= $mhs['nilai_total'] ?> </td>
                                                                <td> <?= $mhs['nilai_mutu'] ?> </td>

                                                            </tr>
                                                        </tbody>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- start line pagination -->
                                <nav aria-label="Page navigation ">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>

                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>

                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                                <!-- end line pagination -->
                            </div>
                        </div>
                    </section>
                </form>
                <!-- Bordered table end -->
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Uniba Madura</p>
                    </div>
                    <!-- <div class="float-end">
                         <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">A. Saugi</a></p>
                     </div> -->
                </div>
            </footer>
        </div>
    </div>
    <script src="../../dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../dist/assets/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/assets/js/main.js"></script>
</body>

</html>