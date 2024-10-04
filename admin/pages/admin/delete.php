<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../authen.php') ?>
<?php

    if (isset($_GET['id'])) {
        $sql = "DELETE FROM admin WHERE id = '".$_GET['id']."' ";
        $result = $conn->query($sql);
        if($conn->affected_rows){
            echo '<script> alert("ลบข้อมูลสำเร็จ")</script>';
            header('Refresh:0; url=index.php');
            // header('location: index.php?d=1');
        } else {
            echo '<script> alert("ลบข้อมูลไม่สำเร็จ")</script>';
            header('Refresh:0; url=index.php');
        }
    } else {
        header('Refresh:0; url=index.php');
    }

?>
