<?php
$sisi = $_POST["sisi"];

if($_POST['submit'] == "luas"){
    $hasil = 6*$sisi;
    echo "luas kubus dengan sisi $sisi = $hasil;";
  }else if ($_POST["submit"] == "volume"){
      $hasil = $sisi * $sisi * $sisi;
      echo "volume kubus dengan sisi $sisi  = $hasil;";
    }
 ?>
