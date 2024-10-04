<?php
   session_start();
   require_once('php/connect.php');

if (isset($_POST['submit'])) {
        $sql = "INSERT INTO `conplaint` (`name`,`tel`,`email`, `message`, `created_at`) 
                VALUES  ('".$_POST['name']."',
                         '".$_POST['tel']."',
                         '".$_POST['email'].",
                         '".$_POST['message']."',
                         '".date("Y-m-d H:i:s")."');";
        $result = $conn->query($sql);
        if ($result) {
            echo '<script> alert("ส่งข้อมูลร้องเรียน เรียบร้อยแล้ว")</script>';
            header('Refresh:0; url=index.php');
        } else {
            echo '<script> alert("ส่งข้อมูลร้องเรียน ไม่สำเร็จ")</script>';
            header('Refresh:0; url=index.php');
        }
    } else {
    header('Refresh:0; url=index.php');
}
?>