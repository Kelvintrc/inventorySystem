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
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
  <?php
     //navbar
    include_once("./templates/header.php");
   ?>
   <br/><br/>
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <div class="card mx-auto">
            <img class="card-img-top mx-auto" style="width: 60%" src="./images/user.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Profile Info</h5>
              <p class="card-text"><i class="fa fa-user">&nbsp;</i>Kelvin Mutwiri</p>
              <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
              <p class="card-text">Last Login: xxxx-xx-xx</p>
              <a href="#" class="btn btn-primary"><i class="fa fa-pencil">&nbsp;</i>Edit Profile</a>
            </div>
          </div>
       </div>
       <div class="col-md-8">
         <div class="jumbotron" style="width: 100%;height: 100%;">
           <h1>Welcome Admin,</h1>
           <div class="row">
             <div class="col-sm-6">
               <img src="./images/admin.jpeg" width="300" height="300">
             </div>
             <div class="col-sm-6">
               <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">New Orders</h5>
                    <p class="card-text">Here you can make new invoices and create new orders</p>
                    <a href="new_order.php" class="btn btn-primary">New Orders</a>
                  </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <p></p>
   <p></p>
   <div class="container">
     <div class="row">
       <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Categories</h5>
              <p class="card-text">Here you can manage your categories  and you can add new parent and sub categories</p>
              <a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
              <a href="manage_categories.php" class="btn btn-primary">Manage</a>
            </div>
          </div>
       </div>
       <div class="col-md-4">
         <div class="card">
            <div class="card-body">
              <h5 class="card-title">Brand</h5>
              <p class="card-text">Here you can manage your Brand and you can add new Brand</p>
              <a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
              <a href="manage_brand.php" class="btn btn-primary">Manage</a>
            </div>
          </div>
       </div>
       <div class="col-md-4">
         <div class="card">
            <div class="card-body">
              <h5 class="card-title">Products</h5>
              <p class="card-text">Here you can manage your Products and you can add new Products</p>
              <a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>
              <a href="manage_product.php" class="btn btn-primary">Manage</a>
            </div>
          </div>
       </div>
     </div>
   </div>
    
    <?php
    //category form
    include_once("./templates/category.php");
    ?>

    <?php
    //brand form
    include_once("./templates/brand.php");
    ?>

    <?php
    //products form
    include_once("./templates/products.php");
    ?>

    
</body>
</html>
