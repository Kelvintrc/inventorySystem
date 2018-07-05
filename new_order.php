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
    <script type="text/javascript" src="./js/order.js"></script>
</head>
<body>
  
  <?php
     //navbar
    include_once("./templates/header.php");
   ?>
   <br/><br/>
    <div class="container">
     <div class="row">
       <div class="col-md-10 mx-auto">
         <div class="card" style="box-shadow: 0 0 25px lightgrey;">
           <div class="card-header">
            <h4>New Orders</h4>
           </div>
           <div class="card-body">
             <form id="get_order_data" onsubmit="return false">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" align="right">Order Date</label>
                  <div class="col-sm-6">
                    <input type="text" id="order_date" name="order_date" readonly class="form-control form-control-sm" value="<?php echo date("Y-m-d"); ?>">
                  </div>  
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" align="right">Customer Name*</label>
                  <div class="col-sm-6">
                    <input type="text" id="cust_name" name="cust_name" class="form-control form-control-sm" placeholder="Enter Customer Name" required/>
                  </div>  
                </div>
                <div class="card">
                  <div class="card-body" style="box-shadow: 0 0 15px lightgrey;">
                    <h3>Make Order List</h3>
                    <table align="center" style="width:800px;">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th style="text-align: center;">Item Name</th>
                          <th style="text-align: center;">Total Quantity</th>
                          <th style="text-align: center;">Quantity</th>
                          <th style="text-align: center;">Price</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody id="invoice_item">
                       <!-- <tr>
                          <td><b id="number">1</b></td>
                          <td>
                            <select name="pid[]" class="form-control form-control-sm" required/>
                              <option>Maclick Super</option>
                            </select>
                          </td>
                          <td><input type="text" name="tqty[]" class="form-control form-control-sm" readonly/></td>
                          <td><input type="text" name="qty[]" class="form-control form-control-sm" required/></td>
                          <td><input type="text" name="price[]" class="form-control form-control-sm" readonly/></td>
                          <td>Rs.1550</td>
                        </tr>-->
                      </tbody>
                    </table><!--table end-->
                    <center style="padding: 10px;">
                      <button id="add" style="width: 150px;" class="btn btn-success">Add</button>
                       <button id="remove" style="width: 150px;" class="btn btn-danger">Remove</button>
                    </center>
                  </div><!--card body end-->
                </div><!-- order list card end-->

                <p></p>
                <div class="form-group row">
                  <label for="sub_total" class="col-sm-3 col-form-label" align="right">Sub Total</label>
                  <div class="col-sm-6">
                    <input type="text" readonly name="sub_total" class="form-control form-control-sm" id="sub_total" required/>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="gst" class="col-sm-3 col-form-label" align="right">GST (18%)</label>
                  <div class="col-sm-6">
                    <input type="text" readonly name="gst" class="form-control form-control-sm" id="gst" required/>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="discount" class="col-sm-3 col-form-label" align="right">Discount</label>
                  <div class="col-sm-6">
                    <input type="text" name="discount" class="form-control form-control-sm" id="discount" required/>
                  </div>
                </div>
                 <div class="form-group row">
                  <label for="net_total" class="col-sm-3 col-form-label" align="right">Net_Total</label>
                  <div class="col-sm-6">
                    <input type="text" readonly name="net_total" class="form-control form-control-sm" id="net_total" required/>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="paid" class="col-sm-3 col-form-label" align="right">Paid</label>
                  <div class="col-sm-6">
                    <input type="text" name="paid" class="form-control form-control-sm" id="paid" required/>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="due" class="col-sm-3 col-form-label" align="right">Due</label>
                  <div class="col-sm-6">
                    <input type="text" readonly name="due" class="form-control form-control-sm" id="due" required/>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="payment_type" class="col-sm-3 col-form-label" align="right">Payment Method</label>
                  <div class="col-sm-6">
                    <select name="payment_type" class="form-control form-control-sm" id="payment_type" required/>
                      <option>Cash</option>
                      <option>Card</option>
                      <option>Draft</option>
                      <option>Cheque</option>
                    </select>
                  </div>
                </div>
                  <center>
                    <input type="submit" id="order_form" style="width: 150px;" class="btn btn-info" value="Order">
                    <input type="submit" id="print_invoice" style="width: 150px;" class="btn btn-success d-none" value="Print Invoice">
                  </center>

             </form>
           </div>
         </div>
       </div>  
     </div>
   </div>
</body>
</html>
