<meta charset="UTF-8">
<?php include_once('../authen.php') ?>
<?php
if (isset($_POST['submit'])) {
    $sql_check_username = "SELECT * FROM `admin` WHERE `username` = '" . $_POST['username'] . "'";
    $check_username = $conn->query($sql_check_username);
    if (!$check_username->num_rows) {
        $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO `admin` (`first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) 
                VALUES ('" . $_POST['first_name'] . "', 
                        '" . $_POST['last_name'] . "', 
                        '" . $_POST['username'] . "', 
                        '" . $hashed . "', 
                        '" . $_POST['status'] . "', 
                        '" . date("Y-m-d H:i:s") . "', 
                        '" . date("Y-m-d H:i:s") . "', 
                        '" . date("Y-m-d H:i:s") . "');";
        $result = $conn->query($sql);
        if ($result) {
            header('location: index.php?m=1');
        } else {
            echo '<script> alert("ไม่สำเร็จ")</script>';
            header('Refresh:0; url=index.php');
        }
    } else {
        echo '<script> alert("มีชื่อผู้ใช้แล้ว กรุณาสมัครใหม่")</script>';
        header('Refresh:0; url=form-create.php');
    }
} else {
    header('Refresh:0; url=index.php');
}
?>