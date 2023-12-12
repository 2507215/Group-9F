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
            <form method="POST" action="#" id="customerForm">
               <div class="col-lg-12 col-md-12 hideDiv" id="step_1">
                  <h3 class="text-center">Step 1 : Add Customer</h3>
                  <div class="row">
                     <div class="col-lg-4">
                        <label>Customer Name</label>
                        <input required type="text" class="form-control validation_1" name="name">
                     </div>
                     <div class="col-lg-4">
                        <label>Customer Dob</label>
                        <input required type="date" class="form-control validation_1" name="dob">
                     </div>
                     <div class="col-lg-4">
                        <label>Customer Mobile Number</label>
                        <input required type="text" class="form-control validation_1" name="mobile">
                     </div>
                     <div class="col-lg-12">
                        <label>Customer Address</label>
                        <textarea required class="form-control validation_1" name="address"></textarea>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 text-right">
                        <button type="button" class="btn btn-primary" onclick="nextPreviousButton('2','next')">Next</button>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 hideDiv" id="step_2">
                  <h3 class="text-center">Step 2 : Add Vehicle</h3>
                  <div class="row">
                     <div class="col-lg-4">
                        <label>Vehicle Company</label>
                        <input required type="text" class="form-control validation_2" name="company">
                     </div>
                     <div class="col-lg-4">
                        <label>Vehicle Color</label>
                        <input required type="color" class="form-control validation_2" name="color">
                     </div>
                     <div class="col-lg-4">
                        <label>Vehicle Model</label>
                        <input required type="text" class="form-control validation_2" name="model">
                     </div>
                     <div class="col-lg-4">
                        <label>Vehicle Number</label>
                        <input required type="text" class="form-control validation_2" name="vehicle_no">
                     </div>
                     <div class="col-lg-4">
                        <label>Vehicle Type</label>
                        <input required type="text" class="form-control validation_2" name="vehicle_type">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 text-right">
                        <button type="button" class="btn btn-danger" onclick="nextPreviousButton('1','previous')">Previous</button>
                        &nbsp;
                        <button type="button" class="btn btn-primary" onclick="nextPreviousButton('3','next')">Next</button>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 hideDiv" id="step_3">
                  <h3 class="text-center">Step 3 : Add Insurance</h3>
                  <div class="row">
                     <div class="col-lg-4">
                        <label>Insurance Number</label>
                        <input required type="text" class="form-control validation_3" name="insurance_no">
                     </div>
                     <div class="col-lg-4">
                        <label>Issue Date</label>
                        <input required type="date" class="form-control validation_3" name="issue_date">
                     </div>
                     <div class="col-lg-4">
                        <label>Expiry Date</label>
                        <input required type="date" class="form-control validation_3" name="expiry_date">
                     </div>
                     <div class="col-lg-4">
                        <label>Insurance Amount</label>
                        <input required type="number" class="form-control validation_3" name="amount">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 text-right">
                        <button type="button" class="btn btn-danger" onclick="nextPreviousButton('2','previous')">Previous</button>
                        &nbsp;
                        <button type="button" class="btn btn-primary" onclick="nextPreviousButton('4','next')">Next</button>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 hideDiv" id="step_4">
                  <h3 class="text-center">Step 4 : Add Payment</h3>
                  <div class="row">
                     <div class="col-lg-4">
                        <label>Payment Date</label>
                        <input required type="date" class="form-control validation_4" name="payment_date">
                     </div>
                     <div class="col-lg-4">
                        <label>Payment Amount</label>
                        <input required type="number" class="form-control validation_4" name="payment_amount">
                     </div>
                     <div class="col-lg-4">
                        <label>Payment Method</label>
                        <input required type="text" class="form-control validation_4" name="payment_method">
                     </div>
                     <div class="col-lg-4">
                        <label>Payment Status</label>
                        <input required type="text" class="form-control validation_4" name="payment_status">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-12 text-right">
                        <button type="button" class="btn btn-danger" onclick="nextPreviousButton('3','previous')">Previous</button>
                        &nbsp;
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </body>
   <script type="text/javascript">
      $(document).ready(function () {
         $('#step_1').show();
      });
      
      function nextPreviousButton(id,type) {
         if(type=='next'){
			var tempId = id-1;
			var errorInput="";
			var flag=true;
			$(".validation_"+tempId).each(function(){
				var ele=$(this);
				if($(this).val()==""){
					ele.focus();
					errorInput=ele;
					flag=false;
					return false;
				}
			});
			if(flag){
				$('.hideDiv').hide();
				$('#step_' + id).show();
			}else{
				alert("Please fill all fields");
			}
         }else{
			$('.hideDiv').hide();
			$('#step_' + id).show();
		 }
         
      }
      		
      $('#customerForm').on('keyup keypress', function(e){
      	var keyCode = e.keyCode || e.which;
      	if(keyCode === 13){
      		e.preventDefault();
      		return false;
      	}
      });
        
      $('form').submit(function(e){
      	e.preventDefault();
      	$.ajax({
      		url: 'addData.php',
      		type:'post',
      		data: $(this).serialize(),
      		success:function(data){
      			if(data == 'success'){
      				window.location = 'customer.php';
      			}else{
      				alert(data);
      			}
      		}
      	});
      });
   </script>
</html>