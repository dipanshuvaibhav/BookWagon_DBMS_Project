<?php

session_start();

$con = mysqli_connect('us-cdbr-east-03.cleardb.com','b2270625c60d18','74d05350');

mysqli_select_db($con, 'customer_table');

// $name =$_POST['name'];
$password = $_POST['login-password'];
$email = $_POST['email1'];

$s = "select * from customer_table where cust_email = '$email' && cust_pass = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
    header('location:my-account.php');
}else{
    header('location:login-register.php');
    echo"Wrong information please try again!";
}

?>
