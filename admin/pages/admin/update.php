<meta charset="UTF-8">
<?php include_once('../authen.php') ?>
<?php

  if (isset($_POST['submit'])) {
    $sql = "UPDATE admin SET
            `name`        = '".$_POST['name']."',
            `username`    = '".$_POST['username']."',
            `status`      = '".$_POST['status']."',
            `updated_at`  = '".date("Y-m-d H:i:s")."' WHERE `id` = '".$_POST['id']."';";
      $result = $conn->query($sql);
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
