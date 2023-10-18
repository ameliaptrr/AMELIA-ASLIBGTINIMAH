<?php 
// error_reporting(0);
session_start();
include("./koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>LAPERBEB</title>

    <?php
    include("./komponen/customfont.html");
    include("./komponen/customstyle.html");?>

  </head>

  <body id="page-top">

  <?php
  if(empty($_SESSION['username'])) {
    include("./konten/login.php");
  } else {
    include("./admin.php");
  }
  ?>

  </body>
</html>
