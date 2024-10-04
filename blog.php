<!-- <?php
    require_once('php/connect.php');
    $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
    $sql = "SELECT * FROM `articles` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true' ORDER BY created_at DESC";
    $result = $conn->query($sql);
    if (!$result) {
        header('Location: blog.php');
    }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Section Meta tag -->
    <?php include_once('includes/meta.php') ?>

<!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">


</head>
<body>

<!-- Section Navbar -->
    <?php include_once('includes/navbar3.php') ?>

<!-- Section Page-title -->
    <header class="jarallax" data-speed="0.5" style="background-image: url('../assets/images/background/IMG_9509.JPG');">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">ผลงาน/กิจกรรม</h1>
            <p class="lead">"โรงเรียนไผ่งามวิทยา โรงเรียนดีใกล้บ้าน(แม่เหล็ก)"</p>
        </div>
    </header>
<!-- Section Blog -->
    <section class="container py-5">
    <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="blog.php?tag=all">
                        <button class="btn btn-outline-secondary <?php echo $tag == 'all' ? 'active': '' ?> ">ทั้งหมด</button>
                    </a>
                    <a href="blog.php?tag=ผู้บริหาร">
                        <button class="btn btn-outline-secondary <?php echo $tag == 'ผู้บริหาร' ? 'active': '' ?>">ผู้บริหาร</button>
                    </a>
                    <a href="blog.php?tag=ครู">
                        <button class="btn btn-outline-secondary <?php echo $tag == 'ครู' ? 'active': '' ?>">ครู</button>
                    </a>
                    <a href="blog.php?tag=นักเรียน">
                        <button class="btn btn-outline-secondary <?php echo $tag == 'นักเรียน' ? 'active': '' ?>">นักเรียน</button>
                    </a>

                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if ($result->num_rows){
                while($row = $result->fetch_assoc()) {
            ?>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-img">
                        <img class="card-img-top" src="<?php echo $base_path_blog.$row['image'] ?>" alt="Coding">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['subject'] ?></h5>
                        <p class="card-text"><?php echo $row['sub_title'] ?></p>
                    </div>
                    <div class="p-3">
                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-dark btn-block">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </section>
            <?php
                }
            } else {
            ?>
            <section class="col-12">
                <p class="text-center">ไม่มีข้อมูล</p>
            </section>
            <?php
            }
            ?>
        </div>

    </section>

<!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>
    <?php include_once('php/userlogs.php') ?>

    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
