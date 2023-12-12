<?php
	require_once('config.php');

    $name = $_POST['username'];
    $password = $_POST['password'];

    $result=$dbh->query("select * from user where user_name='$name' and user_password='$password'")->fetchAll();

    if(count($result)){
        $_SESSION['username']=$name;
        echo "success";
    }else{
        echo "Check username and password";
    }

?>