<meta charset="UTF-8">
<?php include_once('../authen.php') ?>
<?php

  // print_r($_POST);
  // exit;

  if (isset($_POST['submit'])) {

      $sql  = "SELECT MAX(id) AS i FROM member";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $y_num = substr(date("Y")+543,2,2);
      // $new_num = $y_num.'00'.$row['id']+1;

      // print_r($row['i']);
      // exit;

      $sql = "INSERT INTO member SET
      
               `member_id`        = '".$_POST['member_id']."',
              `prefix`        = '".$_POST['prefix']."',
              `name`          = '".$_POST['name']."',
              `member_type`   = '".$_POST['member_type']."',
              `phone_number`  = '".$_POST['phone_number']."',
              `email`         = '".$_POST['email']."',
              `admin_id`      = '".$_SESSION['authen_id']."',
              `created_at`    = '".date("Y-m-d H:i:s")."',
              `updated_at`    = '".date("Y-m-d H:i:s")."'";
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
      header('Refresh:0; url=index.php');
  }

?>
