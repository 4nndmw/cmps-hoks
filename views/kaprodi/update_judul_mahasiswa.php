 <?php
    require '../../controllers/mahasiswa_controller/Mahasiswa_controller.php';
    $mahasiswa = new MahasiswaController();

    // var_dump($mahasiswa->queryAll());

    // $id = $_GET['id'];

    // $mhs = $mahasiswa->queryAll("SELECT * FROM tabel_proposal WHERE id_proposal = $id")[0];


    if (isset($_POST['submit'])) {
        if ($mahasiswa->updateData($_POST) > 0) {
            echo "
                <script>
                    alert('berhasil menambahkan data');
                    document.location.href = '';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('berhasil menambahkan data');
                document.location.href = '';
            </script>
        ";
        }
    }

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>update Judul Skripsi</title>

     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../../dist/assets/css/bootstrap.css">

     <link rel="stylesheet" href="../../dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
     <link rel="stylesheet" href="../../dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
     <link rel="stylesheet" href="../../dist/assets/css/app.css">
     <link rel="shortcut icon" href="../../dist/assets/images/favicon.svg" type="image/x-icon">
 </head>

 <body>
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

                     <li class="sidebar-title">Forms &amp; Tables Mahasiswa</li>

                     <li class="sidebar-item active has-sub">
                         <a href="#" class='sidebar-link'>
                             <i class="bi bi-hexagon-fill"></i>
                             <span>Halaman Form </span>
                         </a>
                         <ul class="submenu active">
                             <li class="submenu-item active">
                                 <a href="tabel_judul_mahasiswa.php">Tabel Judul Mahasiswa</a>
                             </li>
                             <li class="submenu-item active">
                                 <a href="tabel_nilai_sidang.php">Tabel Jadwal Mahasiswa</a>
                             </li>
                             <li class="submenu-item active">
                                 <a href="show_nilai_sidang.php">Lihat Jadwal Sidang</a>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </div>
             <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
         </div>
     </div>
     <script src="../../dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     <script src="../../dist/assets/js/bootstrap.bundle.min.js"></script>

     <script src="../../dist/assets/js/main.js"></script>
 </body>

 </html>