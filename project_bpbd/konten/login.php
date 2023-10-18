<?php
// session_start();
$con = mysqli_connect("localhost", "root", "", "bpbd_mel");
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($con, "select * FROM login where 
  username ='$username' and password =sha1('$password') ");
  $jumlah = mysqli_num_rows($query);

  if ($jumlah > 0) {
    $sesi = mysqli_fetch_assoc($query);

    $_SESSION['id'] = $sesi['id_pengguna'];
    $_SESSION['username'] = $sesi['username'];
    $_SESSION['password'] = $sesi['password'];
    $_SESSION['level'] = $sesi['level'];

    print "<meta http-equiv='refresh' content='0; url=?menu=home'>";
  } else {
    $pesan = "<div class='alert alert-danger'>Username & Password tidak cocok</div>";
  }
}
?>

<div class="row" id="app">
  <div class="col-md-4 offset-md-4">
    <div class="card login mt-4">
      <div class="card-header text-center">
        <img src="./img/bpbd.png" class="" alt="logo">
        
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary btn-block">LOGIN</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  var app = new Vue({
    el: '#app',
    data() {
      return {
        username: '',
        password: '',
      }
    }
  })
</script>