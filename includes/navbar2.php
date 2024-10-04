<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php"); ?>
<nav style="background-color:#8B0000;" class="navbar navbar-expand-lg fixed-top navbar-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">
            <img src="../assets/images/logo.png" width="35" height="35" class="d-inline-block align-top" alt="">
            โรงเรียนไผ่งามวิทยา โรงเรียนดีใกล้บ้าน(แม่เหล็ก)
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarKey">
            <ul class="navbar-nav ml-auto text-center">

                <li class="nav-item dropdown <?php echo $file_name == 'plan' ? 'active' : '' ?>">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ข้อมูลพื้นฐาน
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../01information/history.php">ประวัติโรงเรียน</a>
                        <a class="dropdown-item" href="../01information/vision.php">วิสัยทัศน์/พันธกิจ</a>
                        <a class="dropdown-item" href="../01information/authority.php">อำนาจหน้าที่</a>
                        <a class="dropdown-item" href="../01information/goal.php">เป้าประสงค์</a>
                        <a class="dropdown-item" href="../01information/laws.php">กฏหมายที่เกี่ยวข้อง</a>
                        <a class="dropdown-item" href="../01information/duty.php">ปรัชญา/อัตลักษณ์/เอกลักษณ์</a>
                        <a class="dropdown-item" href="../01information/music.php">เพลงโรงเรียน</a>
                        <a class="dropdown-item" href="../01information/calendar.php">ปฏิทินกิจกรรม</a>
                        <a class="dropdown-item" href="../01information/building.php">ข้อมูลอาคารสถานที่</a>
                        <a class="dropdown-item" href="../01information/scboard.php">คณะกรรมการสถานศึกษา</a>
                        <a class="dropdown-item" href="../01information/thastd.php">จำนวนครู/นักเรียน</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        โครงสร้างการบริหาร
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../02personnel/manager.php">ทำเนียบผู้บริหาร</a>
                        <a class="dropdown-item" href="../02personnel/employee.php">ครูและบุคลากร</a>
                        <a class="dropdown-item" href="../02personnel/managementsc.php">โครงสร้างการบริหารงานโรงเรียน</a>
                        <a class="dropdown-item" href="../02personnel/academic.php">ฝ่ายบริหารงานวิชาการ</a>
                        <a class="dropdown-item" href="../02personnel/money.php">ฝ่ายบริหารงานงบประมาณ</a>
                        <a class="dropdown-item" href="../02personnel/personaljob.php">ฝ่ายบริหารงานบุคคล</a>
                        <a class="dropdown-item" href="../02personnel/genaraltask.php">ฝ่ายบริหารงานทั่วไป</a>
                        <a class="dropdown-item" href="../02personnel/moral-agency.php">ส่งเสริมคุณธรรมและความโปร่งใสภายในหน่วยงาน</a>
                        <a class="dropdown-item" href="../02personnel/service.php">รายงานการให้บริการ</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        กลุ่มสาระการเรียนรู้
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../03development/childhood.php">ปฐมวัย</a>
                        <a class="dropdown-item" href="../03development/thai.php">ภาษาไทย</a>
                        <a class="dropdown-item" href="../03development/mathematics.php">คณิตศาสตร์</a>
                        <a class="dropdown-item" href="../03development/science.php">วิทยาศาสตร์และเทคโนโลยี</a>
                        <a class="dropdown-item" href="../03development/social.php">สังคมศึกษา ศาสนา และวัฒนธรรม</a>
                        <a class="dropdown-item" href="../03development/hygiene.php">สุขศึกษาและพลศึกษา</a>
                        <a class="dropdown-item" href="../03development/art.php">ศิลปะ</a>
                        <a class="dropdown-item" href="../03development/work.php">การงานอาชีพ</a>
                        <a class="dropdown-item" href="../03development/abroad.php">ภาษาต่างประเทศ</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ชมรม/กิจกรรม
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../05contact/botanicalgarden.php">สวนพฤกษศาสตร์ ร.ร.</a>
                        <a class="dropdown-item" href="../05contact/tobe.php">TO BE NUMNER ONE</a>
                        <a class="dropdown-item" href="../05contact/student.php">สภานักเรียน</a>
                        <a class="dropdown-item" href="../05contact/scwhite.php">สถานศึกษาสีขาว</a>
                        <a class="dropdown-item" href="../05contact/woodcharm.php">โรงเรียนสุจริต</a>
                        <a class="dropdown-item" href="../05contact/reducetime.php">ลดเวลาเรียน เพิ่มเวลารู้</a>
                        <a class="dropdown-item" href="../05contact/pracharat.php">โรงเรียนประชารัฐ</a>
                    </div>
                </li>

                <a class="nav-link" href="../blog.php" role="button" aria-haspopup="true" aria-expanded="false">
                    ผลงาน
                </a>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-sign-in-alt"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="07admin/login.php">เข้าสู่ระบบ</a>
                        <a class="dropdown-item" href="https://www.hmlp.go.th/roundcube">Email</a>
                    </div>
                </li> -->
            </ul>
        </div>
    </div>
</nav>