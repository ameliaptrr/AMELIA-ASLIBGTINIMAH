<!-- Sidebar -->
<ul style="background-color: rgb(255, 208, 107)" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
   
    <div class="profile">
      <img src="img/bpbd.png" />
      <style>
        .wrapper .sidebar .profile img {
          display: block;
          width: 80px;
          height: 80px;
          border-radius: 10%;
          margin: 0 auto;
        }
      </style>
    </div>
 

  <!-- Divider -->
  <hr class="sidebar-divider my-0" />

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="?menu=home">
     
  

  
  
  <!-- Nav Item - Utilities Collapse Menu
  <?php if($_SESSION['level'] == 'admin') {?>
  <li class="nav-item">
    
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>form</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="?menu=tanggapan-pengaduan">Tanggapan</a>
      </div>
    </div>
  </li>
  <?php } ?> -->


  <?php if($_SESSION['level'] == 'masyarakat') {?>
  <li class="nav-item">
    
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Forms</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="?menu=form-pengaduan">Pengaduan</a>
        <a class="collapse-item" href="?menu=form-kejadian">Kejadian</a>
      </div>
    </div>
  </li>
  <?php } ?>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Laporan</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="?menu=data-pengaduan">Data Laporan Pengaduan</a>
        <a class="collapse-item" href="?menu=data-kejadian">Data Laporan Kejadian</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar -->
