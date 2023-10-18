<?php 
	$id = $_GET['id'] ;

	$data = mysqli_query($con,
              "SELECT * FROM tanggapan where id_pengaduan = '$id' "
            ) ;
	$cek = mysqli_num_rows($data) ;
	if($cek > 0) 
	{
		$row = mysqli_fetch_array($data) ;
		$tanggapan_pengaduan = $row['tanggapan_pengaduan'] ;
		$status = $row['status_tanggapan_pengaduan'] ;
	} else {
		$tanggapan_pengaduan = '' ;
		$status = '' ;
	}
?>
<div class="card shadow mb-4" style="background-color: rgb(255, 208, 107)">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: rgb(255, 208, 107)">
        <h6 class="m-0 font-weight-bold text-dark">Respon Pengaduan</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form enctype="multipart/form-data" method="post" action="admin_input_tanggapan_pengaduan.html">
                	<input type="hidden" name="id_pengaduan" value="<?php echo $id ; ?>">
                    <div class="form-group">
                        <label class="label pl-3 text-dark">Tanggapan</label>
                        <div class="col-md-12">
                        <textarea rows="3" name="tanggapan_pengaduan" class="form-control"><?php echo $tanggapan_pengaduan ; ?></textarea>
                        </div>
                        </div>
                    

                    <div class="form-group">
                        <label class="label pl-3 text-dark">Status</label>
                        <div class="col-md-12">
                        <select name="status_tanggapan_pengaduan" class="form-control">
                        <option value="">Status</option>
                        <option value="Pending" <?php if($status == 'Pending') { ?> selected <?php } ?> >Pending</option>
                        <option   option value="Proses" <?php if($status == 'Proses') { ?> selected <?php } ?> >Proses</option>
                        <option value="Selesai" <?php if($status == 'Selesai') { ?> selected <?php } ?> >Selesai</option>
                        </select>
                        </div>
                        </div>

                    <div class="form-group mt-4">
                        <div class="col-md-12 text-right ">
                            <button type="submit" class="btn text-light" style="background-color: #E24C00;"> Simpan Tanggapan</button>
                        </div>
                        </div>

                </form>  
            </div>
        </div>
    </div>
</div>