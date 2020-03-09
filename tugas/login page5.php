
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <style media="screen">
  body{
    background-image: url("background.png");
  }
  .card{
      margin-top: 175px ;
      margin-left: 350px ;
      width: 25%;

    }
  </style>
  <body>
    <div class="container">
      <div class="row">
        <div class="card col-sm-4">
          <div class="card-header ">
            <h1 align = "center">Data yang anda masukkan</h1>
          </div>
          <div class="card-body">
            <?php
            $nis = $_POST['nis'];
            $namad = $_POST['namad'];
            $namab = $_POST['namab'];
            $temp = $_POST['temp'];
            $tanggal = $_POST['tanggal'];
            $agama = $_POST['agama'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $notelp = $_POST['notelp'];
            $face = $_POST['face'];
            $ins = $_POST['ins'];
            $web = $_POST['web'];
            $alamat = $_POST['alamat'];
            $jurusan = $_POST['jurusan'];
            $kelas = $_POST['kelas'];
            $pesan = $_POST['pesan'];

            echo "nis anda = $nis<br>";
            echo "nama depan anda = $namad<br>";
            echo "nama belakang anda = $namab<br>";
            echo "tempat lahir  anda = $temp<br>";
            echo "tanggal lahir anda = $tanggal<br>";
            echo "agama anda = $agama<br>";
            echo "gender anda = $gender<br>";
            echo "email anda = $email<br>";
            echo "notelp anda = $notelp<br>";
            echo "facebook anda = $face<br>";
            echo "instagram anda = $ins<br>";
            echo "web anda = $web<br>";
            echo "alamat anda = $alamat<br>";
            echo "jurusan anda = $jurusan<br>";
            echo "kelas anda = $kelas<br>";
            echo "pesan anda = $pesan<br>";
             ?>
             <h3 align = "right"><a href="keluaran.php" >OK</a></h3>
             <h3 align = "right"><a href="login page3.php" >kembali</a></h3>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
