<meta charset="UTF-8">
<?php include_once('../authen.php') ?>
<?php
if (isset($_POST['submit'])) {
    $sql = "UPDATE `admin` 
        SET `first_name` = '" . $_POST['first_name'] . "', 
            `last_name` = '" . $_POST['last_name'] . "', 
            `status` = '" . $_POST['status'] . "', 
            `updated_at` = '" . date("Y-m-d H:i:s") . "'
        WHERE `id` = '" . $_POST['id'] . "';";
    $result = $conn->query($sql);
    if ($result) {
        header('location: index.php?m=1');
    } else {
        echo '<script> alert("ไม่สำเร็จ")</script>';
        header('Refresh:0; url=index.php');
    }
} else {
    header('Refresh:0; url=index.php');
}
?>