<?php
$servername = "us-cdbr-east-03.cleardb.com";
$dbUsername ="b2270625c60d18";
$dbpwd = "74d05350";
$dbName = "heroku_adaaf59afa8e08a";

$conn = mysqli_connect($servername,$dbUsername,$dbpwd,$dbName);
if(!$conn){
  die("Connection Failed:".mysqli_connect_error());
}
?>
