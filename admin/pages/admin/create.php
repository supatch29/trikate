<meta charset="UTF-8">
<?php include_once('../authen.php') ?>
<?php

  if (isset($_POST['submit'])) {
      $sql_check_username = "SELECT * FROM admin WHERE username = '".$_POST['username']."'";
      $check_username = $conn->query($sql_check_username);
      if (!$check_username->num_rows) {
          $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $sql = "INSERT INTO admin SET
                  `name`        = '".$_POST['name']."',
                  `username`    = '".$_POST['username']."',
                  `password`    = '".$hashed."',
                  `status`      = '".$_POST['status']."',
                  `last_login`  = '".date("Y-m-d H:i:s")."',
                  `created_at`  = '".date("Y-m-d H:i:s")."',
                  `updated_at`  = '".date("Y-m-d H:i:s")."'";
          $result = $conn->query($sql) or die($conn->error);
          if ($result) {
              echo '<script> alert("บันทึกข้อมูลสำเร็จ")</script>';
              // header('location: index.php');
              header('Refresh:0; url=index.php');
          } else {
              echo '<script> alert("บันทึกข้อมูลไม่สำเร็จ")</script>';
              header('Refresh:0; url=index.php');
          }
      } else {
          echo '<script> alert("มีชื่อผู้ใช้แล้ว กรุณาสมัครใหม่")</script>';
          header('Refresh:0; url=form.php');
      }
  } else {
      header('Refresh:0; url=index.php');
  }

?>
