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

    //   print_r($row['i']);
    //   exit;

      $sql = "INSERT INTO books SET
              `book_id`        = '".$_POST['book_id']."',
              `book_name`          = '".$_POST['book_name']."',
              `type_id`   = '".$_POST['book_type']."',
              `quantity_book`  = '".$_POST['quantity_book']."',
              `price`         = '".$_POST['price']."',
              `page`         = '".$_POST['page']."',
              `author`         = '".$_POST['author']."',
              `admin_id`      = '".$_SESSION['admin_id']."',
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
