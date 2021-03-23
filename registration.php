<?php
session_start();
$con = mysqli_connect('us-cdbr-east-03.cleardb.com','b2270625c60d18','74d05350');
mysqli_select_db($con,'heroku_adaaf59afa8e08a');

$name = $_POST['name'];
$mail = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from heroku_adaaf59afa8e08a.customer_table where cust_name = '$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num ==1){
  echo "Username already taken";
}else{
  $reg = "insert into heroku_adaaf59afa8e08a.customer_table(cust_name,cust_email,cust_pass) values ('$name','$mail','$pass');";
  mysqli_query($con,$reg);

  echo "Registration Successfull";
}

 ?>
