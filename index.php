<?php
require 'database/connect.php';
session_start();


  if(isset($_POST["Log"])) {

    $username=$_POST['username'];
    $password=$_POST['password'];


   $sql = $db->query("SELECT Username, Password, UserID FROM POSDB.Login");
    if($sql->num_rows){
    $Logins = $sql->fetch_all(MYSQLI_ASSOC);
    foreach($Logins as $Users){
      if ($Users['Username'] == $username && $Users['Password'] == $password) {
        $_SESSION['Identifier'] = $Users['UserID'];
        header('Location: dashboard.php');
        
        }
    }
            //echo "Invalid Username or Password";
            echo'<div class="alert alert-danger fade in">';
            echo '<a href="#" class="close" data-dismiss="alert" style="text-align: center;" aria-label="close">&times;</a>Invalid Login. Please try again!</div>';
            echo '</div>';
       
  }


  }

?>


  

<!DOCTYPE html>
<html>

<head>
  <title>Procurement Committee</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
</head>



<body style="background-image: url('images/background.jpg')">
  


  <!--Main container-->
  <div class="container" style="text-align: center; margin-top: 250px; width: 80%;">
    <!--Title banner-->
    <div class="jumbotron" style="background-color:aliceblue;">
	
	<hr class="intro-divider"/>
            <h1 class="shadowme">Procurement Committee P D S S</h1><a href=""><img src="images/logo.png" height="64" alt="title" /></a>
            <h2><a class="shadowme" style="color:orange;text-decoration:none;" href="public/login.xhtml" data-toggle="modal" data-target="#popUpWindow">Submiter</a></h2>
            <h2><a class="shadowme" style="color:orange;text-decoration:none;" href="public/login.xhtml" data-toggle="modal" data-target="#popUpWindow">Account Portal</a></h2>
            <h2><a class="shadowme" style="color:orange;text-decoration:none;" href="public/login.xhtml" data-toggle="modal" data-target="#popUpWindow">ICT Portal</a></h2><h2>
            <a class="shadowme" style="color:orange;text-decoration:none;" href="public/login.xhtml" data-toggle="modal" data-target="#popUpWindow">Legal Portal</a></h2>
            <h2><a class="shadowme" style="color:orange;text-decoration:none;" href="public/login.xhtml" data-toggle="modal" data-target="#popUpWindow">Administration Interface</a></h2>
            <!--<h2><a class="shadowme" style="color:orange;text-decoration:none;" href="javascript:void(0)" onClick="window.open('mobile.xhtml', 'mobile.xhtml', 'width=320,height=440')">Mobile Event Logger</a></h2>-->
            <hr class="intro-divider"/>
      <!--<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#popUpWindow">Log In</button>-->
    </div>
    <!--Login button-->
    <!--Contents of button-->
    <div class="modal fade" id="popUpWindow" style="margin-top: 300px;">
      <div class="modal-dialog">
        <div class="modal-content">
          <!--Header inside of button-->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Log In</h3>
          </div>
          <!--Body inside of button-->
          <div class="modal-body">
            <form role="form" action="" method="post">
              <div class="form-group">
                <input type="username" class="form-control" placeholder="Username" name='username'>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name='password'>
              </div>
              </div>
          <!--Footer inside of button-->
          <div class="modal-footer">
           <button class="btn btn-primary btn-block" type="submit" name="Log" >Log In</button>
           </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
