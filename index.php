<?php
include_once("./database/constants.php");
if (isset($_SESSION["userid"])) {
 header("location:".DOMAIN."/dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>Online Animal Feeds Sale system</title>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--link to css-->
    <link rel="stylesheet" type="text/css" href="./includes/style.css">
      
    <!--link to js-->
    <script type="text/javascript" src="./js/main.js"></script>

</head>
<body>
  <div class="overlay"><div class="loader"></div></div>
  <?php
     //navbar
    include_once("./templates/header.php");
   ?>
   <br/><br/>
   <div class="container">
    
    <?php

      if (isset($_GET["msg"]) && !empty($_GET["msg"])) {
       ?>
        
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $_GET["msg"];?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

       <?php
      }

    ?>

     <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top mx-auto" style="width: 60%;" src="./images/login.png" alt="Login Icon">
        <div class="card-body">
          <form id="login_form" onsubmit="return false">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="log_email" id="log_email" placeholder="Enter email">
                <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="log_password" id="log_password" placeholder="Password">
                <small id="p_error" class="form-text text-muted"></small>
              </div>
              <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Login</button>
              <span><a href="register.php">Register</a></span>
          </form>
      </div>
      <div class="card-footer"><a href="#">Forgot Password ?</a></div>
    </div>
  
   </div>
</body>
</html>
