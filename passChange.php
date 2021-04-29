<?php
session_start();

include 'config.php';

$user = $_SESSION['id'];
$pass1 = $_POST['pass'];
$pass2 = $_POST['passC'];

if($pass1 == $pass2){
  $sql = $conn->prepare("UPDATE heroku_adaaf59afa8e08a.customer_table SET cust_pass = ? WHERE (customerID = ?);");
  $sql->bind_param("si",$pass1,$user);
  $sql->execute();

  echo "<script type='text/javascript'>alert('Password has been changed!');
  window.location='my-account.php';
  </script>";
}else{
  echo "<script type='text/javascript'>alert('Wrong Information please check all details again!');
  window.location='my-account.php';
  </script>";
}

?>
