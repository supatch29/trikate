<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>พิมพ์ใบชำระค่าปรับ</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.co m/css?family=Prompt" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <style type="text/css">
  .center {
      text-align:center;
      padding-top: 2em;
    }
    .column1{
    float:left;
    width:33%;
    }
    .column2{
        float:left;
        width:33%;
        margin:0px 0.5%;
    }
    .column3{
        float:right;
        /* width:33%;         */
        text-align:left;
      margin-top: 2em;
      margin-right: 20em;
      padding-left:5px;
      width: 13%;
      border : solid;
    }
    .row::after {
    content: "";
    clear: both;
    display: table;
    }
    table {
        border-collapse: collapse;
        
    }
    table, td, th {
        border: 1px solid black;
        padding: 15px;
    text-align: left;
    }
    .column1{
    float:left;
    width:33%;
    }
  </style>
</head>

<body>
  <div class="row">
      <div class="column1">&nbsp;</div>
      <div class="column2 center">
        <img src="../dist/img/tk.jpg" width="80" height="80" alt="" ;>
        <p>ใบเสร็จชำระเงินค่าปรับ</p>
        <p> ห้องสมุดโรงเรียนไตรเขตประชาสามัคคี รัชมังคลาภิเษก</p>
      </div>
      <div class="column3 ">     
        <p >เลขที่ใบเสร็จ</p>
        <p >วันที่</p>
      </div>
  </div>
  <div class="center" >
    <p style="display: inline">รหัสสมาชิก........</p>
    <p  style="display: inline">ชื่อ..............................</p>
    <p  style="display: inline">ประเภทสมาชิก..............</p> 

  </div>
  <div class="center">
    <table>
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
      </tr>
      <tr>
        <td>Peter</td>
        <td>Griffin</td>
      </tr>
      <tr>
        <td>Lois</td>
        <td>Griffin</td>
      </tr>
  </thead>
    </table>
 

</body>
</html>