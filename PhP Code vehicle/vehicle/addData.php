<?php
	require_once('config.php');

    $c_name = $_POST['name'];
    $c_dob = $_POST['dob'];
    $c_mobile = $_POST['mobile'];
    $c_address = $_POST['address'];

    $v_color = $_POST['color'];
    $v_company = $_POST['company'];
    $v_model = $_POST['model'];
    $v_vehicle_no = $_POST['vehicle_no'];
    $v_vehicle_type = $_POST['vehicle_type'];

    $i_insurance_no = $_POST['insurance_no'];
    $i_issue_date = $_POST['issue_date'];
    $i_expiry_date = $_POST['expiry_date'];
    $i_amount = $_POST['amount'];

    $p_payment_date = $_POST['payment_date'];
    $p_payment_amount = $_POST['payment_amount'];
    $p_payment_method = $_POST['payment_method'];
    $p_payment_status = $_POST['payment_status'];

    $randomStr = str_pad(rand(0, pow(10, 8)-1), 8, '0', STR_PAD_LEFT);

    $c = $dbh->query("insert into `customer` (`name`, `dob`, `mobile`, `address`) 
    values ('$c_name', '$c_dob', '$c_mobile', '$c_address')");	
    $cId = $dbh->lastInsertId();
   
    $v = $dbh->query("insert into `vehicle` (`customer_id`, `color`, `company`, `model`, `vehicle_no`, `vehicle_type`) 
    values ('$cId', '$v_color', '$v_company', '$v_model', '$v_vehicle_no', '$v_vehicle_type')");	
    $vId = $dbh->lastInsertId();

    $i = $dbh->query("insert into `insurance` (`customer_id`, `user_id`, `vehicle_id`, `insurance_no`, `issue_date`, `expiry_date`, `amount`) 
    values ('$vId', '1', '$vId', '$i_insurance_no', '$i_issue_date', '$i_expiry_date', '$i_amount')");	
    $iId = $dbh->lastInsertId();

    $p = $dbh->query("insert into `payment` (`insurance_id`, `payment_no`, `payment_date`, `payment_amount`, `payment_method`, `payment_status`) 
    values ('$iId', '$randomStr', '$p_payment_date', '$p_payment_amount', '$p_payment_method', '$p_payment_status')");	

    echo 'success';
?>