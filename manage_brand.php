<?php

include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
 header("location:".DOMAIN."/");
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
    <script type="text/javascript" src="./js/manage.js"></script>
</head>
<body>
  <?php
     //navbar
    include_once("./templates/header.php");
   ?>
   <br/><br/>
   <div class="container">
     <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Brand</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="get_brand">
          <!--<tr>
            <td>1</td>
            <td>Cow Feeds</td>
            <td><a href="#" class="btn btn-success btn-sm">Active</a>
            </td>
            <td>
              <a href="#" class="btn btn-danger btn-sm">Delete</a>
              <a href="#" class="btn btn-info btn-sm">Edit</a>
            </td>
          </tr>-->
        </tbody>
      </table>
   </div>
   
</body>
</html>
