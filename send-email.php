<?php 
 
 $user = "b2270625c60d18";  
 $password = "74d05350";  
 $host = "us-cdbr-east-03.cleardb.com";  
 $dbase = "heroku_adaaf59afa8e08a";  
 $table = "email_list";  
   

$from= 'dipanshu.vaibhav@science.christuniversity.in';
 
$subject= $_POST['subject']; 
$body= $_POST['body']; 
 
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
$query= "SELECT * FROM heroku_adaaf59afa8e08a.email_list"; 
$result= mysqli_query ($dbc, $query)  
or die ('Error querying database.'); 
 
while ($row = mysqli_fetch_array($result)) { 
$email= $row['email']; 
 
$msg= "Dear BookWagoner,\n$body"; 
mail($email, $subject, $msg, 'From:' . $from); 
echo 'Email sent to: ' . $email. '<br>'; 
} 
 
mysqli_close($dbc); 
?> 
 