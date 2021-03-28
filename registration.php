<?php
// session_start();
$con = mysqli_connect('us-cdbr-east-03.cleardb.com','b2270625c60d18','74d05350');
mysqli_select_db($con,'heroku_adaaf59afa8e08a');

$name = $_POST['name'];
$mail = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from heroku_adaaf59afa8e08a.customer_table where cust_email = '$mail';";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num ==1){
  echo "<script type='text/javascript'>alert('Register with a different email!');
window.location='login-register.php?error=mailalreadyexist';
</script>";
}else{
  $reg = "insert into heroku_adaaf59afa8e08a.customer_table(cust_name,cust_email,cust_pass) values ('$name','$mail','$pass');";
  mysqli_query($con,$reg);

  echo "<script type='text/javascript'>alert('Registration done successfully');
window.location='login-register.php?signup=success';
</script>";
}

// if(isset($_POST['registerbtn'])){
// $servername = "us-cdbr-east-03.cleardb.com";
// $dbUsername ="b2270625c60d18";
// $dbpwd = "74d05350";
// $dbName = "heroku_adaaf59afa8e08a";
//
// $data = mysqli_connect($servername,$dbUsername,$dbpwd,$dbName);
// $conn = mysqli_select_db($data,$dbName);
  // require 'dbconnect.php';

//   $name = $_POST['name'];
//   $mail = $_POST['email'];
//   $pass = $_POST['password'];
//   $repPwd = $_POST['repeat-password'];
//
//   if(empty($name) || empty($mail) || empty($pass) || empty($repPwd)){
//     // header("Location: login-register.php?error=emptyfields&id=".$name."&mail=".$mail);
//     echo "<script type='text/javascript'>
//     window.location='login-register.php?error=emptyfields&id=".$name."&mail=".$mail"';
//     </script>"
//     exit();
//   }
//   else if(!filter_var($mail,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$name)){
//     // header("Location: login-register.php?error=invalidmail&id");
//     echo "<script type='text/javascript'>
//     window.location='login-register.php?error=invalidmail&id';
//     </script>"
//     exit();
//   }
//   else if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
//     // header("Location: login-register.php?error=invalidmail&id=".$name);
//     echo "<script type='text/javascript'>
//     window.location='login-register.php?error=invalidmail&id=".$name"';
//     </script>"
//     exit();
//   }
//   else if(!preg_match("/^[a-zA-Z0-9]*$/",$name)){
//     // header("Location: login-register.php?error=invalidid&mail=".$mail);
//     echo "<script type='text/javascript'>
//     window.location='login-register.php?error=invalidid&mail=".$mail"';
//     </script>"
//     exit();
//   }
//   else if($pass !== $repPwd){
//     // header("Location: login-register.php?error=checkpassword&id=".$name."mail=".$mail);
//     echo "<script type='text/javascript'>
//     window.location='login-register.php?error=checkpassword&id=".$name."mail=".$mail"';
//     </script>"
//     exit();
//   }//checking wether customer already exists
//   else {
//       $sql = "SELECT customerID FROM heroku_adaaf59afa8e08a.customer_table  WHERE cust_name=?";
//       $stmt = mysqli_stmt_init($conn);
//       if(!mysqli_stmt_prepare($stmt,$sql)){
//         // header("Location: login-register.php?error=sqlerror");
//         echo "<script type='text/javascript'>
//         window.location='login-register.php?error=sqlerror';
//         </script>"
//         exit();
//       }
//       else{
//         mysqli_stmt_bind_param($smtp,'s',$name);
//         mysqli_stmt_execute($stmt);
//         mysqli_stmt_store_result($stmt);
//         $resultCheck= mysqli_stmt_num_rows($stmt);
//         if(resultCheck >0){
//           // header("Location: login-register.php?error=usertaken&mail=".$mail);
//           echo "<script type='text/javascript'>
//           window.location='login-register.php?error=usertaken&mail=".$mail"';
//           </script>"
//           exit();
//         }//inserting the customer after all the checks
//         else{
//           $sql = "INSERT INTO heroku_adaaf59afa8e08a.customer_table(cust_name,cust_email,cust_pass) VALUES (?,?,?);";
//           $stmt = mysqli_stmt_init($conn);
//           if(!mysqli_stmt_prepare($stmt,$sql)){
//             // header("Location: login-register.php?error=sqlerror");
//             echo "<script type='text/javascript'>
//             window.location='login-register.php?error=sqlerror';
//             </script>"
//             exit();
//           }
//           else{
//             $hashedPWD = password_hash($pass,PASSWORD_DEFAULT);
//             mysqli_stmt_bind_param($smtp,'sss',$name,$mail,);
//             mysqli_stmt_execute($stmt);
//
//            echo "<script type='text/javascript'>
//            window.location='login-register.php?signup=success';
//            </script>"
//             exit();
//           }
//         }
//       }
//   }
// mysqli_stmt_close($stmt);
// mysqli_close($conn);
// }
// else{
//   // header("Location: login-register.php");
//   echo "<script type='text/javascript'>
//   window.location='login-register.php';
//   </script>"
//   exit();
//
// }
