 <?php
    require '../../controllers/mahasiswa_controller/Mahasiswa_controller.php';
    $mahasiswa = new MahasiswaController();


    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Input Judul Skripsi</title>

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
                         <div class="col-12 col-md-6 order-md-1 order-last">
                             <h3>Input</h3>
                             <p class="text-subtitle text-muted">Give textual form controls like input upgrade with
                                 custom styles,
                                 sizing, focus states, and more.</p>
                         </div>
                         <div class="col-12 col-md-6 order-md-2 order-first">
                             <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                 <ol class="breadcrumb">
                                     <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                     <li class="breadcrumb-item active" aria-current="page">Input</li>
                                 </ol>
                             </nav>
                         </div>
                     </div>
                 </div>
                 <section class="section">

                     <form method="post" action="">
                         <div class="card">
                             <div class="card-header">
                                 <h4 class="card-title">Data Mahasiswa</h4>
                             </div>
                             <?php foreach ($mahasiswa->queryAll() as $mhs) : ?>
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="basicInput">Nama Mahasiswa : </label>
                                                 <label for="basicInput"><?= $mhs['nama_mahasiswa'] ?></label>
                                             </div>
                                             <div class="form-group">
                                                 <label for="basicInput">Npm : </label>
                                                 <label for="basicInput"><?= $mhs['npm'] ?></label>
                                             </div>
                                             <div class="form-group">
                                                 <label for="basicInput">Jurusan</label>
                                                 <input type="text" class="form-control" id="basicInput" name="jurusan">
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="basicInput">Tempat Tanggal Lahir</label>
                                                 <input type="text" class="form-control" id="basicInput" name="tempat_tanggal_lahir">
                                             </div>
                                             <div class="form-group">
                                                 <label for="basicInput">Alamat</label>
                                                 <input type="text" class="form-control" id="basicInput" name="alamat">
                                             </div>
                                             <div class="form-group">
                                                 <label for="basicInput">No Telepon</label>
                                                 <input type="text" class="form-control" id="basicInput" name="no_telepon">
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             <?php endforeach; ?>
                         </div>

                         <div class="card">
                             <div class="card-header">
                                 <h4 class="card-title">Input Judul Skripsi </h4>
                             </div>
                             <div class="card-body">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="basicInput">Judul 1 </label>
                                             <input type="text" class="form-control" id="basicInput" name="judul_pertama">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Masalah 1:</label>
                                             <input type="text" class="form-control" id="basicInput" name="masalah_pertama1">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Masalah 2:</label>
                                             <input type="text" class="form-control" id="basicInput" name="masalah_pertama2">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Masalah 3:</label>
                                             <input type="text" class="form-control" id="basicInput" name="masalah_pertama3">
                                         </div>
                                     </div>

                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="basicInput">Judul 2</label>
                                             <input type="text" class="form-control" id="basicInput" name="judul_kedua">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Masalah 1:</label>
                                             <input type="text" class="form-control" id="basicInput" name="masalah_kedua1">
                                         </div>
                                         <div class="form-group">
                                             <label for="basicInput">Masalah 2:</label>
                                             <input type="text" class="form-control" id="basicInput" name="masalah_kedua2">
                                         </div>
                                     </div>
                                     <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </section>
             </div>

             <footer>
                 <div class="footer clearfix mb-0 text-muted">
                     <div class="float-start">
                         <p>2021 &copy; Mazer</p>
                     </div>
                     <div class="float-end">
                         <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">A. Saugi</a></p>
                     </div>
                 </div>
             </footer>
         </div>
     </div>
     <script src="../../dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     <script src="../../dist/assets/js/bootstrap.bundle.min.js"></script>

     <script src="../../dist/assets/js/main.js"></script>
 </body>

 </html>