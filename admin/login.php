<?php

  session_start();
  require_once('../php/connect.php');
  if (isset($_POST['submit'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM admin WHERE username = '".$username."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!empty($row) && password_verify($password, $row['password'])) {
      $_SESSION['authen_id']  = $row['id'];
      $_SESSION['name']       = $row['name'];
      $_SESSION['status']     = $row['status'];
      $_SESSION['last_login'] = $row['last_login'];

      $update = "UPDATE admin SET last_login = '".date("Y-m-d H:i:s")."' WHERE id = '".$row['id']."'";
      $result_update = $conn->query($update);

      if ($result_update) {
        header('Location: pages/dashboard');
      } else {
        echo '<script> alert("ERROR!!!") </script>';
      }
    } else {
      echo '<script> alert("ชื่อผู้ใช้และรหัสผ่านไม่ถูกต้อง") </script>';
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>เข้าสู่ระบบ</title>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-16x16.png">
  <link rel="manifest" href="../assets/images/site.webmanifest">
  <link rel="mask-icon" href="../assets/images/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../assets/images/favicons/favicon1.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../assets/images/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body>
<div class="login-box">
<center>
<img src="../assets/images/logo2.png" width="55" height="55" class="d-inline-block align-top" alt="">
    <div class="login-logo">
    <a href="#"><b><h5>สำหรับเจ้าหน้าที่ห้องสมุด</b></a>
  </div>


  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">ลงชื่อเข้าใช้</p>

      <form action="" method="post">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-lock"></i></span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" aria-label="Password" aria-describedby="basic-addon1"required>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">เข้าสู่ระบบ</button>
          </div>
          <!-- /.col -->
        </div>

      </form>
    </div>
    <!-- /.login-card-body -->
  </div><a class="float-right" href="../index.php">กลับสู่หน้าแรก</a>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
