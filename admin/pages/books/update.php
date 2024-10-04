<meta charset="UTF-8">
<?php include_once('../authen.php') ?>
<?php

  if (isset($_POST['submit'])) {
    $sql = "UPDATE books SET
              `book_id`        = '".$_POST['book_id']."',
              `book_name`          = '".$_POST['book_name']."',
              `type_id`   = '".$_POST['book_type']."',
              `quantity_book`  = '".$_POST['quantity_book']."',
              `price`         = '".$_POST['price']."',
              `page`         = '".$_POST['page']."',
              `author`         = '".$_POST['author']."',
              `admin_id`      = '".$_SESSION['admin_id']."',
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
