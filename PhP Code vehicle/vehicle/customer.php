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
            <div class="col-lg-6 col-md-6">
               <h3>Information</h3>
            </div>
            <div class="col-lg-6 col-md-6 text-right">
               <button type="button" class="btn btn-primary" onclick="addCustomer()">Add</button>
            </div>
            <br><br><br>
            <div class="col-lg-12 col-md-12">
               <table>
                  <tr>
                     <th>S.No.</th>
                     <th>Name</th>
                     <th>Mobile</th>
                     <th>Address</th>
                     <th>Vehicle Number</th>
                     <th>Vehicle Type</th>
                     <th>Vehicle Company</th>
                     <th>Insurance Number</th>
                     <th>Payment Method</th>
                     <th>Amount</th>
                     <th>Issue Date</th>
                     <th>Expiry Date</th>
                     <th>View Detail</th>
                  </tr>
                  <?php
                     $query="select * from customer c inner join vehicle v on c.customer_id=v.customer_id inner join insurance i on c.customer_id=i.customer_id inner join payment p on i.insurance_id=p.insurance_id";
                     $result=$dbh->query($query);
                     $response=$result->fetchAll();
                     $i=1;
                     foreach($response as $row){
                     ?>
                  <tr>
                     <td><?php echo $i; ?></td>
                     <td><?php echo $row['name']; ?></td>
                     <td><?php echo $row['mobile']; ?></td>
                     <td><?php echo $row['address']; ?></td>
                     <td><?php echo $row['vehicle_no']; ?></td>
                     <td><?php echo $row['vehicle_type']; ?></td>
                     <td><?php echo $row['company']; ?></td>
                     <td><?php echo $row['insurance_no']; ?></td>
                     <td><?php echo $row['payment_method']; ?></td>
                     <td><?php echo $row['payment_amount']; ?></td>
                     <td><?php echo $row['issue_date']; ?></td>
                     <td><?php echo $row['expiry_date']; ?></td>
                     <td><a type="button" class="btn btn-success"  href="viewDetail.php?id=<?php echo $row['customer_id']; ?>">View</a></td>
                  </tr>
                  <?php $i++;}?>
               </table>
            </div>
         </div>
      </div>
   </body>
   <script>
      function addCustomer() {
         location.href = "/vehicle/addDetail.php";
      }
   </script>
</html>