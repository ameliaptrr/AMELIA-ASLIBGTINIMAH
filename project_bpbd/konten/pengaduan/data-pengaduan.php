<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive" >
            <table class="table table-striped" style="color:black">
            <thead style="background-color: rgb(255, 208, 107)">
                    <tr>
                        <th><font size="4">No</font></th>
                        <th><font size="4">Tanggal</font></th>
                        <th><font size="4">Email</font></th>
                        <th><font size="4">Nama Lengkap</font></th>
                        <th><font size="4">Judul Laporan</font></th>
                        <th><font size="4">Isi Laporan</font></th>
                        <th><font size="4">Photo</font></th>
                        <th><font size="4">Status</font></th>
                        <th><font size="4">Aksi</font></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q = mysqli_query($con, "select * from pengaduan");
                    $nomor = 1;
                    while($row=mysqli_fetch_assoc($q)){
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?=$row['tanggal']; ?></td>
                        <td><?=$row['email']; ?></td>
                        <td><?=$row['nama_lengkap']; ?></td>
                        <td><?=$row['judul_laporan']; ?></td>
                        <td><?=$row['isi_laporan']; ?></td>
                        <td><img src="<?=$row['photo']; ?>" width="100" alt="foto"></td>
                        <td><?php
                        if($row['status'] == "0")  print"pending";
                        else print $row['status']  ?></td>
                        <td>
                        <?php if($_SESSION['level'] == 'admin') {?>
                        <a href="?menu=tanggapan-pengaduan" class="btn btn-success">Tanggapi</a>
                        <a href="hapus.php" class="btn btn-danger">Hapus</a>
                         <?php } ?> 
                        </td>
                    </tr>
                        <?php } ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>