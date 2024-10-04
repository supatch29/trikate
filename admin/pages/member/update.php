<meta charset="UTF-8">
<?php include_once('../authen.php') ?>
<?php

  if (isset($_POST['submit'])) {
    $sql = "UPDATE member SET

            -- `member_id`        = '".$_POST['member_id']."',
            `prefix`        = '".$_POST['prefix']."',
            `name`          = '".$_POST['name']."',
            `member_type`   = '".$_POST['member_type']."',
            `phone_number`  = '".$_POST['phone_number']."',
            `email`         = '".$_POST['email']."',
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
