<?php 
$user = "b2270625c60d18";  
$password = "74d05350";  
$host = "us-cdbr-east-03.cleardb.com";  
$dbase = "heroku_adaaf59afa8e08a";  
$table = "email_list";  
  
$email= $_POST['email']; 
  
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table  ". "VALUES ('$email')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'You have been successfully added to our newsletter list.' . '<br>'; 
 
mysqli_close($dbc); 
 
?> 