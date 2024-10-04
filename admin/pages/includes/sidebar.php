<?php

  $uri = $_SERVER['REQUEST_URI'];
  $array = explode('/', $uri);
  $key = array_search("pages", $array);
  $name = $array[$key+1];

?>
  <nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-warning">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" ><i class="fa fa-bars" style="color:white"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"style="color:white">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"  >
            <i class="fa fa-user"> <span class="font-weight-light" ><?php echo $_SESSION['name']; ?> ( <?php echo $_SESSION['status']; ?> )</span> </i>
          </a>
        </li>
      </ul>
  </nav>
    <!-- /.navbar -->
  <aside class="main-sidebar sidebar-light-warning elevation-4">

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../../assets/images/logo3.png" class="img-circle elevation-2" alt="User Image">
            <!-- <img src="#" class="img-circle elevation-2" alt="User Image"> -->
          </div>
          <div class="info ">
            <a href="#" class="d-block">สำหรับเจ้าหน้าที่ห้องสมุด</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="../dashboard" class="nav-link <?php echo $name == 'dashboard' ? 'active' : '' ?>">
                <i class="fas fa-tachometer-alt nav-icon"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <?php if ($_SESSION['status']=='Super Admin') { ?>
              <li class="nav-item">
                <a href="../admin" class="nav-link <?php echo $name == 'admin' ? 'active' : '' ?>">
                  <i class="fas fa-users-cog nav-icon"></i>
                  <p>ผู้ใช้ระบบ</p>
                </a>
              </li>
            <?php } ?>

            <li class="nav-item">
              <a href="../member" class="nav-link <?php echo $name == 'member' ? 'active' : '' ?>">
              <i class='fas fa-user-friends nav-icon'></i>
                <p>สมาชิก</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../books" class="nav-link <?php echo $name == 'books' ? 'active' : '' ?>">
              <i class="fa fa-book nav-icon nav-icon "></i>
                <p>หนังสือ</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../borrows" class="nav-link <?php echo $name == 'borrows' ? 'active' : '' ?>">
              <i class='fas fa-file-alt nav-icon'></i> 
                <p>การยืมหนังสือ</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../return" class="nav-link <?php echo $name == 'return' ? 'active' : '' ?>">
              
              <i class='far fa-file-alt  nav-icon '></i>
              <p>การคืนหนังสือ</p>
              </a>
            </li>

            <li class="nav-header">การตั้งค่าบัญชี</li>
            <li class="nav-item">
              <a href="../../logout.php" class="nav-link">
                <i class="fas fa-sign-out-alt nav-icon"></i>
                <p>ออกจากระบบ</p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
