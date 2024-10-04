<?php include_once('../authen.php') ?>
<?php

  // $id = $_GET['id'];
  if(isset($_GET['id'])){
    $id     = $_GET['id'];
    $sql    = "SELECT * FROM books WHERE id = '".$id."'";
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
          <h3 class="card-title col-form-label" style="color:white">แก้ไขข้อมูลหนังสือ</h3>
        </div>
      <?php } else { ?>
        <div class="card-header bg-warning">
          <h3 class="card-title col-form-label" style="color:white">เพิ่มข้อมูลหนังสือ</h3>
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
                <label>รหัสหนังสือ<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="book_id" id="book_id" value="<?php if (isset($row['book_id'])) { echo $row['book_id'];} ?>" required>
              </div>

              <div class="form-group">
                <label>ชื่อหนังสือ<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="book_name" id="book_name" value="<?php if (isset($row['book_name'])) { echo $row['book_name'];} ?>" required>
              </div>

              <?php
             $sql_btype    = "SELECT * FROM book_type  ";
             $result_btype = $conn->query($sql_btype);
            ?>
              <div class="form-group">
                
                <label>ประเภทหนังสือ<span class="text-danger">*</span></label>
                <select class="form-control" name="book_type" required>
                  <option value="" disabled selected>-กรุณาเลือกข้อมูล-</option>
                  <?php  while ($row_btype = $result_btype->fetch_assoc()) { ?>
                  <option value="<?php echo $row_btype['code'] ?>" <?php if (isset($row['type_id'])){if ($row['type_id']==$row_btype['code']){echo 'selected';}} ?>  ><?php echo $row_btype['type_name']; ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>ผู้แต่ง<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="author" id="author" value="<?php if (isset($row['author'])) { echo $row['author'];} ?>" required>
              </div>

              <div class="form-group">
                <label>ราคา<span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="price" id="price" value="<?php if (isset($row['price'])) { echo $row['price'];} ?>" required>
              </div>

              <div class="form-group">
                <label>จำนวนหน้า<span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="page" id="page" maxlength="10" value="<?php if (isset($row['page'])) { echo $row['page'];} ?>" required>
              </div>

              <div class="form-group">
                <label>จำนวนหนังสือ</label>
                <input type="number" class="form-control" name="quantity_book" id="quantity_book" value="<?php if (isset($row['quantity_book'])) { echo $row['quantity_book'];} ?>" >
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
  <?php include_once('../includes/footer.php') ?>

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
