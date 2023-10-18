<?php
if(@$_GET['menu'] == "" || $_GET['menu'] == 'home') {
  include('./konten/home.php');
} 
else if($_GET['menu'] == "pengaduan") {
  if($_SESSION['level'] == 'masyarakat') {
    include('./konten/pengaduan.php');
  } else { 
    header('Location: index.php');
  }
}
else if($_GET['menu'] == "logout") {
  // session_start();
  session_destroy();
  print "<meta http-equiv='refresh' content='0; url=index.php'>";
}
else if($_GET['menu'] == "form-pengaduan") {
  include('./konten/pengaduan/form-pengaduan.php');
}
else if($_GET['menu'] == "data-pengaduan") {
  include('./konten/pengaduan/data-pengaduan.php');
  }
else if($_GET['menu'] == "form-kejadian") {
  include('./konten/kejadian/form-kejadian.php');
}
else if($_GET['menu'] == "data-kejadian") {
  include('./konten/kejadian/data-kejadian.php');
}
else if($_GET['menu'] == "tanggapan-pengaduan") {
  include('./tanggapan/tanggapan-pengaduan.php');
}
else if($_GET['menu'] == "tanggapan-kejadian") {
  include('./tanggapan/tanggapan-kejadian.php');
}
