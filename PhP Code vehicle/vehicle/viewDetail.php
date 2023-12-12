<!DOCTYPE html>
<?php
   require_once('config.php');
   if(!isset($_SESSION['username'])){
      header("location:index.php");
   }
   ?>
<html lang="en">
   <head>
      <title>Vehicle Insurance</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/custom.css">
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-11">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="index.php">Vehicle Insurance</a>
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                     <ul class="nav navbar-nav">
                        <li class="active"><a href="customer.php">Customer</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-1">
                  <div class="">
                     <ul class="nav navbar-nav">
                        <li><a href="logout.php">Logout</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </nav>
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12" >
            <?php
               $id=$_GET['id'];
               $query="select * from customer c inner join vehicle v on c.customer_id=v.customer_id inner join insurance i on c.customer_id=i.customer_id inner join payment p on i.insurance_id=p.insurance_id where c.customer_id=$id";
               $result=$dbh->query($query);
               $response=$result->fetch();
               ?>
               <h3 class="text-center text-success">Customer Details</h3>
               <br>
               <div class="row">
                  <div class="col-lg-4">
                     <label>Customer Name: </label>
                     <span><?php echo $response['name']; ?></span>
                  </div>
                  <div class="col-lg-4">
                     <label>Customer Dob: </label>
                     <span><?php echo $response['dob']; ?></span>
                  </div>
                  <div class="col-lg-4">
                     <label>Customer Mobile Number: </label>
                     <span><?php echo $response['mobile']; ?></span>
                  </div>
                  <div class="col-lg-12">
                     <label>Customer Address: </label>
                     <span><?php echo $response['address']; ?></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12">
               <h3 class="text-center text-success">Vehicle Details</h3>
               <br>
               <div class="row">
                  <div class="col-lg-4">
                     <label>Vehicle Company: </label>
                     <span><?php echo $response['company']; ?></span>
                  </div>
                  <div class="col-lg-4">
                     <label>Vehicle Color: </label>
                     <span style="background-color:<?php echo $response['color']; ?>">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     </span>
                  </div>
                  <div class="col-lg-4">
                     <label>Vehicle Model: </label>
                     <span><?php echo $response['model']; ?></span>
                  </div>
                  <div class="col-lg-4">
                     <label>Vehicle Number: </label>
                     <span><?php echo $response['vehicle_no']; ?></span>
                  </div>
                  <div class="col-lg-4">
                     <label>Vehicle Type: </label>
                     <span><?php echo $response['vehicle_type']; ?></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12">
               <h3 class="text-center text-success">Insurance Details</h3>
               <br>
               <div class="row">
                  <div class="col-lg-4">
                     <label>Insurance Number: </label>
                     <span><?php echo $response['insurance_no']; ?></span>
                  </div>
                  <div class="col-lg-4">
                     <label>Issue Date: </label>
                     <span><?php echo $response['issue_date']; ?></span>
                  </div>
                  <div class="col-lg-4">
                     <label>Expiry Date: </label>
                     <span><?php echo $response['expiry_date']; ?></span>
                  </div>
                  <div class="col-lg-4">
                     <label>Insurance Amount: </label>
                     <span><?php echo $response['amount']; ?></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12">
               <h3 class="text-center text-success">Payment Details</h3>
               <br>
               <div class="row">
                  <div class="col-lg-4">
                     <label>Payment Date: </label>
                     <span><?php echo $response['payment_date']; ?></span>
                  </div>
                  <div class="col-lg-4">
                     <label>Payment Amount: </label>
                     <span><?php echo $response['payment_amount']; ?></span>
                  </div>
                  <div class="col-lg-4">
                     <label>Payment Method: </label>
                     <span><?php echo $response['payment_method']; ?></span>
                  </div>
                  <div class="col-lg-4">
                     <label>Payment Status: </label>
                     <span><?php echo $response['payment_status']; ?></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <script type="text/javascript"></script>
</html>