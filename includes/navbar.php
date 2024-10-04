<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php"); ?>
<nav style="background-color:#000040;" class="navbar navbar-expand-lg fixed-top navbar-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo.png" width="35" height="35" class="d-inline-block align-top" alt="">
            ระบบจัดการฟาร์มผึ้ง
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarKey">
            <ul class="navbar-nav ml-auto text-center">

                <a class="nav-link" href="blog.php" role="button" aria-haspopup="true" aria-expanded="false">
                    ผลงาน
                </a>
                <li class="nav-item">
                    <a class="nav-link" href="admin/login.php"><i class="fas fa-sign-in-alt"></i><span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>