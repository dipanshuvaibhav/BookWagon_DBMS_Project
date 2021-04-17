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


$query= "INSERT INTO heroku_adaaf59afa8e08a.email_list (EMAIL) VALUES ('$email')";

mysqli_query ($dbc, $query)
or die ("Error querying database");

echo "<script type='text/javascript'>alert('Your email has been added to the newsletter!');
window.location='index.php';
</script>";

mysqli_close($dbc);

?>
