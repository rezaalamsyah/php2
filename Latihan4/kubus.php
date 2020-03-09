<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kubus</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <style media="screen">
    .card{
        margin-top: 175px ;
        margin-left: 350px ;
        width: 25%;

      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="card col-sm-4">
          <div class="card-header">
            <h3>menghitung luas dan volume kubus</h3>
          </div>
          <div class="card-body">
            <form  action="kubus2.php" method="post">
              sisi : <input type="number" name="sisi" autocomplete="off"><br>
              <input type="submit" name="submit" value="luas">
              <input type="submit" name="submit" value="volume"><br>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
