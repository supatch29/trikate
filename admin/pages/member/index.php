<?php include_once('../authen.php');

  $sql  = "SELECT * FROM member JOIN member_type
  ON member.member_type = member_type.id" ;
  $result = $conn->query($sql);

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
      <!-- Default box -->
      <div class="card">
        <!-- /.card-header -->
        <div class="card-header"><center>
          <h3 class="card-title d-inline-block col-form-label">บันทึกข้อมูลสมาชิก</h3><br>
          <a href="form.php" class="btn btn-warning float-right" ><i class="fas fa-plus" style="color:white"> เพิ่มข้อมูล</i></a href="">
        </div>
        <div class="card-body">

          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th width="10%"><center>ลำดับ</th>   <!-- ไม่ต้องแก้ไข -->
              <th width="10%"><center>รหัสสมาชิก</th>
              <th  width="20%"><center>ชื่อ-นามสกุล</th>
              <th width="20%"><center>ประเภทสมาชิก</th>
              <th width="15S%"><center>อีเมล</th>
              <th width="15S%"><center>เบอร์โทรติดต่อ</th>
              <th width="10%"><center></th>   <!-- ไม่ต้องแก้ไข -->
            </tr>
            </thead>
            <tbody>
            <?php
              $no = 0;
              while ($row = $result->fetch_assoc()) {
                $no++;
            ?>
              <tr>
                <td><center><?php echo $no; ?></td> <!-- ไม่ต้องแก้ไข -->
                <td><center><?php echo $row['member_id']; ?></td>
                <td><?php echo  $row['prefix'] ; ?><?php echo  $row['name'] ; ?></td>
                <td><center><?php echo $row['type_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>

                  <!-- ไม่ต้องแก้ไข -->
                <td><center>
                  <a href="form.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning text-white"><i class="fas fa-edit"></i></a>
                  <a href="#" onclick="deleteItem(<?php echo $row['id']; ?>);" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
                  <!--  -->
              </tr>
            <?php } ?>
            </tbody>
          </table>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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

  function deleteItem (id) {
      if( confirm('คุณต้องการลบข้อมูล ใช่หรือไม่?') == true){
        window.location=`delete.php?id=${id}`;
        // window.location='delete.php?id='+id;
      }
    };

</script>

</body>
</html>
