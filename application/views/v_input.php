<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Di Kas In Aja</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-success topbar mb-4 static-top shadow">

          <nav class="navbar-header" style="margin-left: 20px;">
            <i style="color: white;" class="fas fa-dollar-sign fa-2x fa-fw"></i>
            <a class="navbar-brand" href="#" style="color: white;"><h3>Di Kas In Aja</h3></a>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-success" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

          </ul>
        </nav>

        </nav>
        <!-- End of Topbar -->

  <div class="card bg" style="width: 35%; margin-left: auto; margin-right: auto; margin-top: 35px; background-color: #E6E6FA">
	<form action="<?php echo base_url(). 'registrasi/tambah_aksi'; ?>" method="post">
  <div class="card bg-success">
    <h1 style="font-family: sans-serif; margin-top: 5px; margin-left: 15px; color: white;"><b>Register</b></h1>
    <p style="margin-left: 15px; color: white;">Tolong Isi Kolom Di Bawah Ini Untuk Membuat Akun Baru.</p>
  </div>
  <?php if(validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
      <?php echo validation_errors(); ?>
    </div>
    <?php endif; ?>
  <div class="container">
    <center>
    <hr>

    <div class="form-group">
    <label for="nama_admin" style="margin-left: -300px;"><b>Nama :</b></label>
    <input type="text" placeholder="Masukkan Nama Anda" style="width: 80%;" class="form-control" name="nama_admin" autofocus="" autocomplete="off">
    </div>

    <div class="form-group">
    <label for="username" style="margin-left: -270px;"><b>Username :</b></label>
    <input type="text" placeholder="Masukkan Username Yang Akan Anda Gunakan" style="width: 80%;" class="form-control" name="username" autocomplete="off">
    </div>

    <div class="form-group">
    <label for="password" style="margin-left: -270px;"><b>Password :</b></label>
    <input type="password" placeholder="Masukkan Password" style="width: 80%;" class="form-control" name="password" autocomplete="off">
    </div>

    <div class="form-group">
    <label for="ulangi-password" style="margin-left: -220px;"><b>Ulangi Password :</b></label>
    <input type="password" placeholder="Ulangi Password Anda" style="width: 80%;" class="form-control" name="ulangi-password" autocomplete="off">
  </div>
    <hr>
    <p style="margin-left: 3px; font-size: 10.5pt;">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="btn btn-success" style="width: 80%;">Register</button>
  </div>
  
  <div class="container signin">
    <p style="margin-top: 30px; margin-left: 140px;">Sudah Punya Akun? <a href="http://localhost/aplikasi_CI/login ">Log in</a>.</p>
  </center>
  </div>
</form>
</div>

<?php

  include 'templates/footer.php';

?>