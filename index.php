<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ระบบจัดการห้องสมุด</title>

  <!-- Section Meta tag -->
  <?php include_once('includes/meta.php') ?>
  <!-- CSS -->
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.co m/css?family=Prompt" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    footer {
  text-align: right;
  padding: 20px;
  background-color: #F8A011;
  color: white;
}
    body {
    background-image:url(https://img.freepik.com/free-photo/book-stack-library-room-blurred-bookshelf-background_42691-514.jpg?w=2000);
        background-repeat: no-repeat;
        background-position: center top;
      }
        .container{
          background-color:white;
        }
    hr.style1{
	border-top: 1px solid #8c8b8b;
}
  hr.style16 { 
  border-top: 1px dashed #b9b9b9; 
} 
hr.style16:after { 
  content: '\002702'; 
  display: inline-block; 
  position: relative; 
  top: -14px; 
  left: 40px; 
  padding: 0 3px; 
  /* background: #b9b9b9;  */
  color: #b9b9b9; 
  font-size: 18px; 
}
    .mySlides {display:none;}
</style>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body >
<div class="container"><br>
    <div class="row">
      <div class="col md-6">
        <a class="navbar-brand" href="index.php">
          <img src="assets/images/logo2.png" width="35" height="35" class="d-inline-block align-top" alt="">
          <font color="black"> ระบบห้องสมุดโรงเรียนไตรเขตประชาสามัคคี รัชมังคลาภิเษก</font>
        </a></div>
      <div class="col md-6">
        <p align='right'><a class="nav-link" href="admin/login.php">LONGIN
            <font color="black"><i class="fas fa-sign-in-alt"></i></font><span class="sr-only">(current)</span>
          </a></p>
      </div>
    <div class="w3-content w3-section" style="max-width:100%;"><center>
      <img class="mySlides" src="assets/images/ปก1.png" style="width:98%">
      <img class="mySlides" src="assets/images/ปก2.png" style="width:98%">
      <img class="mySlides" src="assets/images/ปก3.png" style="width:98%">

      <br> <hr class="style16" style="width:100%; ">
      <img src="assets/images/report.png" width="220px" height="95px"><br><br>

      <div class="card-body float-left "style="width:45%;padding: 30px;margin-left:35px;background-color:#FDFFBC">
        <img   src="assets/images/aa.JPG" style="width:90%;margin: 30px 24px  20px; ">
        <h3 style="color:#444E4D;text-align: left;margin-left:24px;">Statistics report on borrowing and returning of library books.</h3>
        <hr class="style1 " style="width:20%;">
        <h3 style="color:#444E4D;text-align: left;margin-left:24px;">พิมพ์รายงานสถิติการยืม-คืนหนังสือห้องสมุด</h3>
        <p style="color:#444E4D;text-align: left;margin-left:24px;">รายงานการยืม-คืนหนังสือ จะจำแนกเป็นนักเรียน อาจารย์ บุคลากรอื่น ตามช่วงเวลาในแต่ละเดือน สามารถพิมพ์รายงายทรัพยากรณ์โดย click</p>
      </div>

      <div class="card-body  float-right"style="width:45%;px;padding: 25px;margin-right:35px;background-color:#FDFFBC">
        <img   src="assets/images/bb.jpg" style="width:90%;margin: 30px 20px  20px; ">
        <h3 style="color:#444E4D;text-align: left;margin-left:24px;">Library book resource report.</h3><br>
        <hr class="style1" style="width:20%;">
        <h3 style="color:#444E4D;text-align: left;margin-left:24px;">พิมพ์รายงานทรัพยากรหนังสือในห้องสมุด</h3>
        <p style="color:#444E4D;text-align: left;margin-left:24px;">รายงานจะจำแนกจำนวนหนังสือตามหมวดหมู่ ตามหมวดหมู่ที่ถูกบันทึกจากการบันทึกข้อมูลหนังสือ สามารถพิมพ์รายงายทรัพยากรณ์โดย click </p>
      </div>
  </div>
</div><br>
  <!-- </div> -->
  <!-- <div> -->
    <footer>    

    <div>
      <i class='fas fa-school'></i><p align='right' >School Website :
      <a href="http://www.trikate.ac.th/">โรงเรียนไตรเขตประชาสามัคคี รัชมังคลาภิเษก<br>Trikate Prachasamakkee Ratchamangkalapisek school</a></p>
    </div>
    </footer>
  </div>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>

</body>
</html>
