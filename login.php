<?php
$con = mysqli_connect('us-cdbr-east-03.cleardb.com','b2270625c60d18','74d05350');

mysqli_select_db($con,'heroku_adaaf59afa8e08a');
// $name =$_POST['name'];
$password = $_POST['password'];
$email = $_POST['email1'];

$s = "select * from heroku_adaaf59afa8e08a.customer_table where cust_email = '$email' && cust_pass = '$password';";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);



if($num==1){
    //header('location:my-account.php');

    echo "<script type='text/javascript'>alert('Logged In successfully');
  window.location='../my-account.php';
  </script>";
  session_start();
  $row = mysql_fetch_array($result);
  $_SESSION['id']=$row['customerID'];
  $_SESSION['name'] = $row['cust_name'];
  $_SESSION['email'] = $row['cust_mail'];
}else{
    //header('location:login-register.php');
    echo "<script type='text/javascript'>alert('Wrong Information please try again!');
  window.location='../login-register.php';
  </script>";
}

?>
