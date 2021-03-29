<?php
// session_start();
// include "dbconnect";
// $name =$_POST['name'];
$servername = "us-cdbr-east-03.cleardb.com";
$dbUsername ="b2270625c60d18";
$dbpwd = "74d05350";
$dbName = "heroku_adaaf59afa8e08a";

$conn = mysqli_connect($servername,$dbUsername,$dbpwd,$dbName);


$email = $_POST['email1'];
$password = $_POST['password'];


$s = "select * from heroku_adaaf59afa8e08a.customer_table where cust_email = '$email' && cust_pass = '$password'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);



if($num==1){
    //header('location:my-account.php');
    echo "<script type='text/javascript'>alert('Logged In successfully');
  window.location='my-account.php';
  </script>";

//   while($row = mysqli_fetch_assoc($result)){
//   $_SESSION['id']=$row['customerID'];
//   $_SESSION['name'] = $row['cust_name'];
//   $_SESSION['email'] = $row['cust_mail'];
// }

}else{
    //header('location:login-register.php');
    echo "<script type='text/javascript'>alert('Wrong Information please try again!');
  window.location='login-register.php';
  </script>";
}
// mysqli_close($conn);
?>
