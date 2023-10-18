<?php
$query = mysqli_query($con,"select * from pengaduan");
$jumlah1 = mysqli_num_rows($query);
$query = mysqli_query($con,"select * from laporan_kejadian");
$jumlah2 = mysqli_num_rows($query);
$query = mysqli_query($con,"select * from tanggapan");
$jumlah3 = mysqli_num_rows($query);
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">LAPERBEB</h1>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Print</a>
            </div>

            <!-- Content Row -->
            <div class="row">
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div><a class="text-xl font-weight-bold text-primary text-uppercase mb-1" href="?menu=data-pengaduan">Data Laporan Pengaduan</a></div>
                      </div>
                      <div class="col-auto">
                   <?php
                   print $jumlah1
                   ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div><a class="text-xl font-weight-bold text-success text-uppercase mb-1" href="?menu=data-kejadian">Data Laporan Kejadian</a></div>
                      </div>
                      <div class="col-auto">
                      <?php
                      print $jumlah2
                      ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <?php if($_SESSION['level'] == 'admin') {?>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div><a class="text-xl font-weight-bold text-success text-uppercase mb-1" href="?menu=data-pengaduan">Data Tanggapan Pengaduan</a></div>
                      </div>
                      <div class="col-auto">
                      <?php
                      print $jumlah3
                      ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>

              <!-- Earnings (Monthly) Card Example -->
              <?php if($_SESSION['level'] == 'admin') {?>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div><a class="text-xl font-weight-bold text-info text-uppercase mb-1" href="?menu=data-kejadian">Data Tanggapan Kejadian</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                          <?php
                          print $jumlah3
                          ?>
                          </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>