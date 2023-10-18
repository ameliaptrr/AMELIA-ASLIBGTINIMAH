<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive" >
            <table class="table table-striped" style="color:black">
            <thead style="background-color: rgb(255, 208, 107)">
                    <tr>
                        <th><font size="4">No</font></th> 
                        <th><font size="4">Jenis Kejadian</font></th> 
                        <th><font size="4">Waktu Kejadian</font></th>
                        <th><font size="4">Lokasi Kejadian</font></th>
                        <th><font size="4">Penyebab Kejadian</font></th>
                        <th><font size="4">Kronologi Kejadian</font></th>
                        <th><font size="4">Dampak</font></th>
                        <th><font size="4">Upaya yang dilakukan</font></th> 
                        <th><font size="4">Kebutuhan Mendesak</font></th> 
                        <th><font size="4">Sumber Informasi</font></th>                        
                        <th><font size="4">Dokumentasi</font></th>
                        <th><font size="4">Aksi</font></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q = mysqli_query($con, "select * from laporan_kejadian");
                    $nomor = 1;
                    while($row=mysqli_fetch_assoc($q)) {
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?=$row['jenis_kejadian']; ?></td>
                        <td><?=$row['waktu_kejadian']; ?></td>
                        <td><?=$row['lokasi_kejadian']; ?></td>
                        <td><?=$row['penyebab_kejadian']; ?></td>
                        <td><?=$row['kronologi_kejadian']; ?></td>
                        <td><?=$row['dampak']; ?></td>
                        <td><?=$row['upaya_yang_dilakukan']; ?></td>
                        <td><?=$row['kebutuhan_mendesak']; ?></td>
                        <td><?=$row['sumber_informasi']; ?></td>
                        <td><img src="<?=$row['dokumentasi']; ?>" width="100" alt="foto"></td>
                        <td>
                        <?php if($_SESSION['level'] == 'admin') {?>
                        <a href="?menu=tanggapan-kejadian" class="btn btn-success">Tanggapi</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                        <?php } ?>
                        </td>                       
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>