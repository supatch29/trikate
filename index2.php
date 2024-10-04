<?php
require_once('php/connect.php');
$sql = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ศูนย์เรียนรวม โรงเรียนไผ่งามวิทยา จ.ลำปาง</title>

    <!-- Section Meta tag -->
    <?php include_once('includes/meta.php') ?>
    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <?php include_once('includes/navbar.php') ?>

    <!-- ตราสัญลักษณ์ -->
    <header class="jarallax" data-speed="0.5" style="background-image: url('assets/images/background/IMG_9509.JPG');">
        <div class="page-image">
            <h2>การประเมินคุณธรรมและความโปร่งใสในการดำเนินงาน</h2>
            <p class="lead">"โรงเรียนไผ่งามวิทยา โรงเรียนดีใกล้บ้าน(แม่เหล็ก)"</p>
        </div>
    </header>
    <br>
    <div class="container">
        <center>
            <h3>ตัวชี้วัดที่ 9 การเปิดเผยข้อมูล</h3>
            <h4>ตัวชี้วัดย่อยที่ 9.1 ข้อมูลพื้นฐาน</h4>

        </center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h5>ข้อมูลพื้นฐาน</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/managementsc.php" class="alert-link">01 โครงสร้าง</a></div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/manager.php" class="alert-link">02 ข้อมูลผู้บริหาร</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="01information/authority.php" class="alert-link">03 อำนาจหน้าที่</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/academic.php#ITA010" class="alert-link">04 แผนยุทธศาสตร์ หรือแผนพัฒนาสถานศึกษา</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="index.php#ITA05" class="alert-link">05 ข้อมูลการติดต่อ</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="01information/laws.php" class="alert-link">06 กฏหมายที่เกี่วข้อง</a> </div>
                <h5>การประชาสัมพันธ์</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="index.php#ITA07" class="alert-link">07 ข่าวสารประชาสัมพันธ์</a></div>
                <div class="alert alert-danger" role="alert">
                    <a href="05contact/question.php" class="alert-link">08 Q&A</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="https://www.facebook.com/phaingampwc/" target="bank" class="alert-link">09 Social Network</a> </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br>
    <div class="container">
        <center>
            <h4>ตัวชี้วัดย่อยที่ 9.2 การบริหารงาน</h4>

        </center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h5>การดำเนินงาน</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/academic.php#ITA010" class="alert-link">010 แผนดำเนินงานประจำปี</a></div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/academic.php#ITA010" class="alert-link">011 รายงานการกำกับ ติดตามการดำเนินงาน ประจำปี รอบ 6 เดือน</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/academic.php#ITA010" class="alert-link">012 รายงานผลการดำเนินงานประจำปี</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/genaraltask.php#ITA013" class="alert-link">013 คู่มือหรือมาตรฐานการปฏิบัติงาน</a> </div>
                <h5>การให้บริการ</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/genaraltask.php#ITA013" class="alert-link">014 คู่มือหรือมาตรฐานการให้บริการ</a></div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/service.php" class="alert-link">015 ข้อมูลเชิงสถิติการให้บริการ</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">016 รายงานผลการสำรวจความพึงพอใจการให้บริการ</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="index.php#ITA05" class="alert-link">017 E-Service</a> </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br>
    <div class="container">
        <center>
            <h4>ตัวชี้วัดย่อยที่ 9.3 การบริหารเงินงบประมาณ</h4>

        </center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h5>แผนการใช้จ่ายงบประมาณประจำปี</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/money.php#ITA018" class="alert-link">018 แผนการใช้จ่ายงบประมาณประจำปี</a></div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/money.php#ITA019" class="alert-link">019 รายงานการกำกับติดตามการใช้จ่ายงบประมาณ รอบ 6 เดือน</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/money.php#ITA020" class="alert-link">020 รายงานผลการใช้จ่ายงบประมาณประจำปี</a> </div>
                <h5>การจัดซื้อจัดจ้างหรือการจัดหาวัสดุ</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/money.php#ITA021" class="alert-link">021 แผนการจัดซื้อจัดจ้างหรือแผนการจัดหาพัสดุ</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="index.php#ITA07" class="alert-link">022 ประกาศต่างๆ เกี่ยวกับการจัดซื้อจัดจ้างหรือการจัดหาวัสดุ</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/money.php#ITA023" class="alert-link">023 สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/money.php#ITA024" class="alert-link">024 รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุประจำปี</a> </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br>

    <div class="container">
        <center>
            <h4>ตัวชี้วัดย่อยที่ 9.4 การบริหารและพัฒนาทรัพยากรบุคคล</h4>

        </center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h5>การบริหารและพัฒนาทรัพยากรบุคคล</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/personaljob.php#ITA025" class="alert-link">025 นโยบายการบริหารทรัพยากรบุคคล</a></div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/personaljob.php#ITA026" class="alert-link">026 การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/personaljob.php#ITA027" class="alert-link">027 หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/personaljob.php#ITA028" class="alert-link">028 รายงานผลการบริหารและพัฒนาทรัพยากรบุคคลประจำปี</a> </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br>

    <div class="container">
        <center>
            <h4>ตัวชี้วัดย่อยที่ 9.5 การส่งเสริมความโปร่งใส</h4>

        </center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h5>การจัดการเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="05contact/woodcharm.php#ITA029" class="alert-link">029 แนวปฏิบัติการจัดการเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</a></div>
                <div class="alert alert-danger" role="alert">
                    <a href="05contact/about.php" class="alert-link">030 ช่องทางแจ้งเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="05contact/about.php#ITA031" class="alert-link">031 ข้อมูลเชิงสถิติเรื่องร้องเรียนการทุจริตและประพฤติมิชอบประจำปี</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="05contact/question.php" class="alert-link">032 ช่องทางการรับฟังความคิดเห็น</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="blog.php?tag=ครู" class="alert-link">033 การเปิดโอกาสให้เกิดการมีส่วนร่วม</a> </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br>

    <div class="container">
        <center>
            <h3>ตัวชี้วัดที่ 10 การป้องกันการทุจริต</h3>
            <h4>ตัวชี้วัดย่อยที่ 10.1 การดำเนินการเพื่อป้องกันการทุจริต</h4>

        </center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h5>เจตจำนงสุจริตของผู้บริหาร</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="05contact/woodcharm.php#ITA034" class="alert-link">034 เจตจำนงสุจริตของผู้บริหาร</a></div>
                <div class="alert alert-danger" role="alert">
                    <a href="blog.php?tag=ผู้บริหาร" class="alert-link">035 การมีส่วนร่วมของผู้บริหาร</a> </div>
                <h5>การประเมินความเสี่ยงเพื่อการป้องกันการทุจริต</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="05contact/woodcharm.php#ITA036" class="alert-link">036 การประเมินความเสี่ยงการทุจริตประจำปี</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="05contact/woodcharm.php#ITA037" class="alert-link">037 การดำเนินการเพื่อจัดการความเสี่ยงการทุจริต</a> </div>
                <h5>การเสริมสร้างวัฒนธรรมองค์กร</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">038 การเสริมสร้างวัฒนธรรมองค์กร</a> </div>
                <h5>แผนป้องกันการทุจริต</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="05contact/woodcharm.php#ITA039" class="alert-link">039 แผนปฏิบัติการป้องกันการทุจริตประจำปี</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="05contact/woodcharm.php#ITA040" class="alert-link">040 รายงานการกำกับติดตามการดำเนินการป้องกันการทุจริต ประจำปี รอบ 6 เดือน</a> </div>
                <div class="alert alert-danger" role="alert">
                    <a href="05contact/woodcharm.php#ITA041" class="alert-link">041 รายงานผลการดำเนินการป้องกันการทุจริตประจำปี</a> </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br>
    <div class="container">
        <center>
            <h4>ตัวชี้วัดย่อย 10.2 มาตรการภายในเพื่อป้องกันการทุจริต</h4>
        </center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h5>มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริตภายในสถานศึกษา</h5>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/moral-agency.php#ITA042" class="alert-link">042 มาตรการส่งเสริมคุณธรรมและความโปร่งใสภายในหน่วยงาน</a></div>
                <div class="alert alert-danger" role="alert">
                    <a href="02personnel/moral-agency.php#ITA043" class="alert-link">043 การดำเนินการตามมาตรการส่งเสริมคุณธรรมและความโปร่งใสภายในหน่วยงาน</a> </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br>
    <!-- -- ส่วนงาน -->
    <br>
    <!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>
    <?php include_once('php/userlogs.php') ?>

    <!-- Section On to Top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
    <script src="assets/js/main.js"></script>
    <div id="fb-root"></div>
    <script async="1" defer="1" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&amp;version=v3.2"></script>
</body>

</html>