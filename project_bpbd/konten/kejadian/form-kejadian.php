<?php
if(isset($_POST["kirim"])){

  $jenis_kejadian =$_POST['jenis_kejadian'];
  $waktu_kejadian =$_POST['waktu_kejadian'];
  $lokasi_kejadian =$_POST['lokasi_kejadian'];
  $penyebab_kejadian =$_POST['penyebab_kejadian'];
  $kronologi_kejadian=$_POST['kronologi_kejadian'];
  $dampak =$_POST['dampak'];
  $upaya_yang_dilakukan =$_POST['upaya_yang_dilakukan'];
  $kebutuhan_mendesak =$_POST['kebutuhan_mendesak'];
  $sumber_informasi =$_POST['sumber_informasi'];
  
  $target_dir = 'foto/';
  $target_file = $target_dir . basename($_FILES['dokumentasi']['name']);
  if (move_uploaded_file($_FILES['dokumentasi']['tmp_name'], $target_file)) {
    $query = "INSERT INTO 	laporan_kejadian VALUES(
      NULL,'$jenis_kejadian',
      '$waktu_kejadian',
      '$lokasi_kejadian',
      '$penyebab_kejadian',
      '$kronologi_kejadian',
      '$dampak',
      '$upaya_yang_dilakukan',
      '$kebutuhan_mendesak',
      '$sumber_informasi',
      '$target_file')";
    $q = mysqli_query($con, $query);
    if ($q) {
      print "<meta http-equiv='refresh' content='0; url=?menu=data-kejadian'>";
    } else {
      print "<div class='alert alert-danger'>Terjadi kesalahan.</div>";
    }
  }


  // mysqli_query($con,$kirim);
  // print $kirim;

  // if(mysqli_affected_rows($con)){
  //   print "<meta http-equiv='refresh' content='0; url=?menu=data-kejadian'>";
  // } 
  // else{
  //   mysqli_error($con);
  //   print "error saat menyimpan";
  // }
}
?>
<h1 style="text-align: center; margin: 20px">Form Kejadian</h1> 
<form action="" method="POST" enctype="multipart/form-data">
  <div class="box">
    <div class="row">
      <div class="col">
        <div class="mb-3">
          <input type="text" name="jenis_kejadian" class="form-control" placeholder="Jenis Kejadian" required>
        </div>
        <div class="mb-3">
          <input type="datetime-local" name="waktu_kejadian" class="form-control" placeholder="Waktu Kejadian" required>
        </div>
        <div class="mb-3">
        <textarea name="lokasi_kejadian" class="form-control" placeholder="Lokasi kejadian" required></textarea>
        </div>
        <div class="mb-3">
        <textarea name="penyebab_kejadian" class="form-control" placeholder="Penyebab kejadian" required></textarea>
        </div>
        <div class="mb-3">
        <textarea name="kronologi_kejadian" class="form-control" placeholder="Kronologi kejadian" required></textarea>
        </div>
        <div class="mb-3">
        <textarea name="dampak" class="form-control" placeholder="Dampak" required></textarea>
        </div>
        <div class="mb-3">
        <textarea name="upaya_yang_dilakukan" class="form-control" placeholder="Upaya yang dilakukan" required></textarea>
        </div>
        <div class="mb-3">
        <textarea name="kebutuhan_mendesak" class="form-control" placeholder="Kebutuhan Mendesak" required></textarea>
        </div>
        <div class="mb-3">
        <textarea name="sumber_informasi" class="form-control" placeholder="Sumber Informasi" required></textarea>
        </div>
        <div class="mb-3">
          <input type="file" name="dokumentasi"class="form-control" placeholder="Dokumentasi" required>
        </div>
      </div>
    </div>
    <button type="submit" name="kirim" class="btn btn-warning">Kirim</button>
  </div>
</form>
