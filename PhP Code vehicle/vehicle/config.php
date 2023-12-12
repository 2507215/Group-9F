<?php

  try{
    session_start();
    $user = 'root';
    $pass = '';
    $dbh = new PDO('mysql:host=localhost;port=3307;dbname=vehicle_insurance', $user, $pass);
  } catch(Exception $e){
    print_r($e);
  }

  
?>