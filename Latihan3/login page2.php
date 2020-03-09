<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login page</title>
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
    <?php
    session_start();
    if (isset($_session["user"])) {
      header("location:login page3.php");
    }
    include("login page4.php");
     ?>
  </head>
  <body bgimage = >
    <div class="container">
      <div class="row">
        <div class="card col-sm-4">
          <div class="card-header bg-info">
            <h1 align = "center">LOGIN</h1>
          </div>
          <div class="card-body">
            <?php
            if (isset($_GET["error"])) {
              if ($_GET["error"] == "wrong") {
             echo '<h3> Username dan Password salah !</h3>';
              }
            }
            if (isset($_GET["notif"])) {
              if ($_GET["notif"] == "logout") {
             echo '<h3> berhasil logout!</h3>';
              }
            }
            if (isset($_POST['submit'])) {
             echo do_login($_POST['nama'],$_POST['pass']);
            }
             ?>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
              ID    : <br><input type ="text" name="nama" autocomplete="off" placeholder="USERNAME" > <br>
              PASSWORD : <br><input type ="password" name="pass" autocomplete="off" placeholder="PASSWORD"> <br>
              <br><input type = "submit" name = "submit" class = "btn btn-success"><br>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
