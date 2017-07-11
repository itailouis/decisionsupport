<?php
require 'database/connect.php';
session_start();
$employeeID = $_SESSION['Identifier'];
$sql = $db->query("SELECT * FROM POSDB.Employee WHERE EmployeeID=$employeeID");
$row = $sql->fetch_array(MYSQLI_ASSOC);
?>

<html>

<head>
    <title>Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/loadNavBar.js"></script>
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/custom.js"></script>
</head>



<body>
    <div id="navigation-bar"></div>

    <!--Table for report-->
    <div class="container-fluid">
    	
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Requisitions</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Entity</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                  <th>Rate</th>
                  <th>Sage</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>hp laptop</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td><span class="badge bg-yellow">70%</span></td>
                  <td><span class="badge bg-yellow">1 of 3</span></td>
                  <td><span class="label label-success">Approved</span><span class="label label-danger">Denied</span></td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Del desktop</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td><span class="badge bg-yellow">40%</span></td>
                   <td><span class="badge bg-yellow">1 of 3</span></td>
                  <td><span class="label label-success">Approved</span><span class="label label-danger">Denied</span></td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>office Fan </td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td><span class="badge bg-yellow">60%</span></td>
                   <td><span class="badge bg-yellow">1 of 3</span></td>
                  <td><span class="label label-success">Approved</span><span class="label label-danger">Denied</span></td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Fridge </td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td><span class="badge bg-yellow">30%</span></td>
                   <td><span class="badge bg-yellow">1 of 3</span></td>
                  <td><span class="label label-success">Approved</span><span class="label label-danger">Denied</span></td>
                </tr>
              </table>
            </div></div>
            <!-- /.box-body -->
        
            <!-- /.box-body -->
          </div>
    </div>
</body>

</html>