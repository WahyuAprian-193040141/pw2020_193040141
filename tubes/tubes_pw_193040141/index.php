<?php
require 'php/functions.php';

$elektronik = query("SELECT * FROM elektronik");

if (isset($_GET['cari'])) {
  // $elektronik = cari($_POST['keyword']);

  $keyword = $_GET['keyword'];
  $elektronik = query("SELECT * FROM elektronik WHERE
  		foto LIKE '%$keyword%' OR
  		jenis LIKE '%$keyword%' OR
  		nama LIKE '%$keyword%' OR
  		deskripsi LIKE '%$keyword%' OR
  		hargabaru LIKE '%$keyword%' ");
} else {
  $elektronik = query("SELECT * FROM elektronik");
}
?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Jost&family=Gelasio:wght@500&family=Hind:wght@600&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

  <title>Barang Elektronik</title>
  <link rel="stylesheet" href="css/css.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="icon" href="assets/icon/universal.png">
</head>

<body>
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="grey darken-3">
      <div class="nav-wrapper">
        <!-- <div class="container"> -->
        <!-- <div class="right">
          <div class="row">
            <div class="col m12">
              <!-- <form action="" method="POST"> -->
        <!-- <input type="text" name="keyword" placeholder="Search" autofocus class="keyword">
              <button type="submit" name="cari" class="tombol-cari">Cari</button> -->
        <!-- </form> -->
        <!-- </div>
    </div> -->
        <!-- </div> -->
        <a href="#" class="brand-logo center judul">Barang Elektronik</a>

        <!-- </div> -->
      </div>
    </nav>
  </div>

  <!-- tabel -->
  <div class="white scrollspy">
    <!--  <br> -->
    <!-- <div class="container"> -->
    <div class="row">
      <div class="col s12 m12 center">
        <form action="" method="get">
          <input type="text" name="keyword" placeholder="Search" autofocus>
          <button type="submit" name="cari">Cari</button>
        </form>
      </div>
    </div>
    <!-- </div> -->

    <!-- isi -->
    <div class="container">
      <div class="row">
        <?php if (empty($elektronik)) : ?>
          <div class="col m6 s12">
            <div class="card white z-depth-5">
              <div class="card-content">
                <p>Data Tidak Ditemukan</p>
              </div>
              <div class="card-action">
                <a href="#">Kembali</a>
              </div>
            </div>
          </div>
        <?php else : ?>
          <?php foreach ($elektronik as $isi) : ?>
            <div class="col s12 m6">
              <div class="card white z-depth-5">
                <div class="card-image">
                  <img src="assets/img/<?= $isi['foto']; ?>" class="foto">
                </div>
                <div class="card-content">
                  <span class="card-title black-text text-darken-3 center jenis"><?= $isi['jenis'] ?></span><br>
                  <p class="nama"><?= $isi['nama'] ?></p>
                </div>
                <div class="card-action center">
                  <b><a href="php/detail.php?id=<?= $isi['id']; ?>">Lihat Detail</a></b>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
    <br>
  </div>


  <!-- footer -->
  <footer class="page-footer #e0e0e0 grey lighten-1">
    <div class="container">
      <div class="row">
        <div class="col s6 m6 center">
          <a href="php/login.php" class="waves-effect #6d4c41 brown darken-1 btn"><i class="material-icons right">lcloud_queue</i>Login</a>
        </div>
        <div class="col s6 m6 center">
          <a href="php/logout.php" class="waves-effect #6d4c41 brown darken-1 btn"><i class="material-icons left">cloud_off</i>Logout</a>
        </div>
      </div>
      <div class="row">
        <div class="col s6 m6 center">
          <a href="php/admin.php" class="waves-effect #6d4c41 brown darken-1 btn"><i class="material-icons right">input</i>Admin</a>
        </div>
        <div class="col s6 m6 center">
          <a href="index.php" class="waves-effect #6d4c41 brown darken-1 btn"><i class="material-icons left">home</i>Home</a>
        </div>
      </div>
    </div>
    </div>
    <div class="footer-copyright #263238 blue-grey darken-4">
      <div class="container center kaki">
        © 2020 Wahyu Aprian
      </div>
    </div>
  </footer>



  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!-- <script src="js/script2.js"></script> -->
  <script>
    const scroll = document.querySelectorAll('.scrollspy');
    M.Scrollspy.init(scrollspy, {
      ScrollOffset = 60
    });
  </script>
</body>

</html>