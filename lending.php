<?php
session_start();

 require 'config.php';

 $name = $_POST['bookName1'];
 $price = $_POST['price'];
 $image_url = $_POST['imageUrl'];
 $user = $_POST['user_id'];

 $sql = $conn->prepare("INSERT INTO heroku_adaaf59afa8e08a.product(p_name,p_price,p_image,producer_id) VALUES(?,?,?,?)");
 $sql->bind_param("sssi",$name,$price,$image_url,$user);
 $sql->execute();

echo "<script type='text/javascript'>alert('Book registered successfully!');
window.location='lend.php';
</script>";
