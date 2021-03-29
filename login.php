<?php
include "dbconnect";
// $name =$_POST['name'];
$email = $_POST['email1'];
$password = $_POST['password'];


$s = "select * from heroku_adaaf59afa8e08a.customer_table where cust_email = '$email' && cust_pass = '$password';";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);



if($num==1){
    //header('location:my-account.php');
    session_start();
    echo "<script type='text/javascript'>alert('Logged In successfully');
  window.location='my-account.php';
  </script>";

  while($row = mysqli_fetch_assoc($result)){
  $_SESSION['id']=$row['customerID'];
  $_SESSION['name'] = $row['cust_name'];
  $_SESSION['email'] = $row['cust_mail'];
}
}else{
    //header('location:login-register.php');
    echo "<script type='text/javascript'>alert('Wrong Information please try again!');
  window.location='login-register.php';
  </script>";
}

?>
