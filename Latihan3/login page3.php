<?php
session_start();
include ("login page4.php");
echo check_login();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>praktek login</title>
   </head>
   <style media="screen">
   body{
     background-image: url("background.png");
   }
   </style>
   <body>
     <h1 align ="center" ><font color = "red">Selamat datang!</font></h1>
     <h3><a href="#">Edit profil</h3>
     <h3><a href="login page2.php">logout</h3>
       <img src="reza.jpg" alt="gambar" width="200" height="auto" hspace ="350" vspace = "0">
      
   </body>
 </html>
