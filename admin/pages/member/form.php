<?php include_once('../authen.php') ?>
<?php

  // $id = $_GET['id'];
  if(isset($_GET['id'])){
    $id     = $_GET['id'];
    $sql    = "SELECT * FROM member WHERE id = '".$id."'";
    $result = $conn->query($sql);
    $row    = $result->fetch_assoc();
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>สำหรับเจ้าหน้าที่ห้องสมุด</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <!-- <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png"> -->
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon1.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <!-- Main content -->
    <section class="content">
      <div class="card">
      <?php if (isset($row['id'])) { ?>
        <div class="card-header bg-warning">
          <h3 class="card-title col-form-label" style="color:white">แก้ไขข้อมูลสมาชิก</h3>
        </div>
      <?php } else { ?>
        <div class="card-header bg-warning">
          <h3 class="card-title col-form-label" style="color:white">เพิ่มข้อมูลสมาชิก</h3>
        </div>
      <?php } ?>
        <!-- /.card-header -->

        <!-- form start -->
        <div class="container">

          <?php if (isset($row['id'])) { ?>
            <form role="form" action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
          <?php } else { ?>
            <form role="form" action="create.php" method="post">
          <?php } ?>
            <div class="card-body">

              <div class="form-group">
                <label>รหัสประจำตัว<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="member_id" id="member_id" value="<?php if (isset($row['member_id'])) { echo $row['member_id'];} ?>" required>

                <label>คำนำหน้าชื่อ<span class="text-danger">*</span></label>
                <select class="form-control" name="prefix" required>
                  <option value="" disabled selected>-กรุณาเลือกข้อมูล-</option>
                  <option value="เด็กชาย" <?php if (isset($row['prefix'])) { if ($row['prefix'] == 'เด็กชาย') { echo 'selected'; } } ?> >เด็กชาย</option>
                  <option value="เด็กหญิง" <?php if (isset($row['prefix'])) { if ($row['prefix'] == 'เด็กหญิง') { echo 'selected'; }} ?>>เด็กหญิง</option>
                  <option value="นาย" <?php if (isset($row['prefix'])) { if ($row['prefix'] == 'นาย') { echo 'selected'; }} ?>>นาย</option>
                  <option value="นาง" <?php if (isset($row['prefix'])) { if ($row['prefix'] == 'นาง') { echo 'selected'; }} ?>>นาง</option>
                  <option value="นางสาว" <?php if (isset($row['prefix'])) { if ($row['prefix'] == 'นางสาว') { echo 'selected'; }} ?>>นางสาว</option>
                </select>
              </div>

              <div class="form-group">
                <label>ชื่อ-นามสกุล<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="name" value="<?php if (isset($row['name'])) { echo $row['name'];} ?>" required>
          </div>

            <?php
             $sql_mtype    = "SELECT * FROM member_type  ";
             $result_mtype = $conn->query($sql_mtype);
            ?>
              <div class="form-group">
                
                <label>ประเภทสมาชิก<span class="text-danger">*</span></label>
                <select class="form-control" name="member_type" required>
                  <option value="" disabled selected>-กรุณาเลือกข้อมูล-</option>
                  <?php  while ($row_mtype = $result_mtype->fetch_assoc()) { ?>
                  <option value="<?php echo $row_mtype['id'] ?>" <?php if (isset($row['member_type'])){if ($row['member_type']==$row_mtype['id']){echo 'selected';}} ?>  ><?php echo $row_mtype['type_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            

              <div class="form-group">
                <label>เบอร์โทรติดต่อ<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="phone_number" id="phone_number" maxlength="10" value="<?php if (isset($row['phone_number'])) { echo $row['phone_number'];} ?>" >
              </div>

              <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php if (isset($row['email'])) { echo $row['email'];} ?>" >
              </div>

              <hr>
              <div align="right">
                <button type="button" onClick="window.history.back()" class="btn btn-danger"><i class="fas fa-chevron-left"> กลับ</i></button>
                <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-check"> บันทึก</i></button>
              </div>

            </div>
          </form>
        </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php //include_once('../includes/footer.php') ?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>

</body>
</html>
