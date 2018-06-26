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
     <div class="card mx-auto" style="width: 30rem;">
       <div class="card-header">Register</div> 
       <div class="card-body">
         <form id="register_form" onsubmit="return false" autocomplete="off">
           <div class="form-group">
             <label for="username">FullName</label>
             <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username">
             <small id="u_error" class="form-text text-muted"></small>
           </div>
           <div class="form-group">
             <label for="email">Email Adress</label>
             <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
             <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
           </div>
           <div class="form-group">
              <label for="password1">Password</label>
              <input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
              <small id="p1_error" class="form-text text-muted"></small>
            </div>
              <div class="form-group">
              <label for="password2"> Re-enter Password</label>
              <input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
              <small id="p2_error" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
             <label for="usertype">Usertype</label>
             <select name="usertype" class="form-control" id="usertype">
              <option value="">Choose User Type</option>
               <option value="1">Admin</option>
               <option value="0">Other</option>
             </select>
             <small id="t_error" class="form-text text-muted"></small>
           </div>
              <button type="submit" name="user_register" class="btn btn-primary"><span class="fa fa-lock"></span>&nbsp;Register</button>
              
              <span><a href="index.php">Login</a></span>
       </form>
       </div>
         <div class="card-footer text-muted"></div>
       </div>
   </div>
</body>
</html