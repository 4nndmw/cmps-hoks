 <?php
    require_once "./login_controller.php";

    $conn = new loginUser();

    $conn->roleUser();


    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../dist/assets/css/bootstrap.css">
     <link rel="stylesheet" href="../dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
     <link rel="stylesheet" href="../dist/assets/css/app.css">
     <link rel="stylesheet" href="../dist/assets/css/pages/auth.css">
 </head>

 <body>
     <div id="auth">

         <div class="row h-100">
             <div class="col-lg-5 col-12 mt-10">
                 <div id="auth-left">
                     <h1 class="auth-title text-success">Log in.</h1>

                     <form action="" method="post">
                         <div class="form-group position-relative has-icon-left mb-4">
                             <input type="text" class="form-control form-control-xl" name="uname">
                             <div class="form-control-icon">
                                 <i class="bi bi-person"></i>
                             </div>
                         </div>
                         <div class="form-group position-relative has-icon-left mb-4">
                             <input type="password" class="form-control form-control-xl" name="pass">
                             <div class="form-control-icon">
                                 <i class="bi bi-shield-lock"></i>
                             </div>
                         </div>
                         <div class="form-check form-check-lg d-flex align-items-end">
                             <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                             <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                 Keep me logged in
                             </label>
                         </div>
                         <button name="submit" class="btn btn-success btn-block btn-lg shadow-lg mt-5">Log in</button>
                     </form>

                 </div>
             </div>
             <div class="col-lg-7  d-none d-lg-block " style="background-image: url('../dist/assets/images/bg/bg-uniba.jpg'); background-position: center; background-size: cover; background-position-x: -200px;  background-repeat: no-repeat;  ">
                 <div id="auth-right  ">

                 </div>
             </div>
         </div>

     </div>
 </body>

 </html>