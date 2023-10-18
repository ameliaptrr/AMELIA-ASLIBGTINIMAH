<?php
if(isset($_POST["kirim"])){
  $tanggal =$_POST['tanggal']; 
  $email =$_POST['email'];
  $nama_lengkap =$_POST['nama_lengkap'];
  $judul_laporan =$_POST['judul_laporan'];
  $isi_laporan =$_POST['isi_laporan'];
  $status = '0';

  $target_dir = 'foto/';
  $target_file = $target_dir . basename($_FILES['photo']['name']);
  if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
    $query = "insert into pengaduan values (
              NULL,
              '$tanggal',
              '$email',
              '$nama_lengkap',
              '$judul_laporan',
              '$isi_laporan',
              '$target_file',
              '$status'
              )";
    $q = mysqli_query($con, $query);
    if ($q) {
      $pesan = "<div class='alert alert-success'>Pengaduan berhasil dikirim.</div>";
    } else {
      $pesan = "<div class='alert alert-danger'>Terjadi kesalahan.</div>";
    }
  }
}

?>
<h1 style="text-align: center; margin: 20px">Form Pengaduan</h1> 


<div class="box">
  <div class="row">
 <div class="col">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
        <input type="datetime-local" name="tanggal" class="form-control" placeholder="Tanggal Pengaduan" required>
        </div>
        <div class="mb-3">
        <input type="text" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap"required>
        </div>
        <div class="mb-3">
        <input type="text" name="judul_laporan" class="form-control" placeholder="Judul Laporan" required>
        </div>
        <div class="mb-3">
        <textarea name="isi_laporan" id="" cols="30" rows="10" class="form-control" placeholder="Tulis isi laporan disini..." required></textarea>
        </div>
        <div class="mb-3">
        <input type="file" name="photo" class="form-control" required>
        </div>
        <button type="submit" name="kirim" class="btn btn-warning">Kirim</button>
      </form>
    </div>
  </div>
  

</div>


</div>
