<?php
session_start();

 require 'config.php';

 $name = $_POST['BookName1'];
 $price = $_POST['price'];
 $image_url = $_POST['imageUrl'];

 $sql = $conn->prepare("INSERT INTO heroku_adaaf59afa8e08a.product(p_name,p_price,p_image) VALUES(?,?,?)");
 $sql->bind_param("ssss",$name,$price,$image_url);
 $sql->execute();

echo "<script type='text/javascript'>alert('Book registered successfully!');
window.location='lend.php';
</script>";