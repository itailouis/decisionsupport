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
    	
  		<div>
        </div>
    </div>
</body>

</html>