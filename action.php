<?php
 require 'config.php';

 if(isset($_POST['pid'])){
   $pid = $_POST['pid'];
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_image = $_POST['p_image'];
   $p_code = $_POST['p_code'];
   $p_qty = 1;

   $stmt = $comm->prepare("SELECT p_code FROM heroku_adaaf59afa8e08a.cart WHERE p_code=?;");
   $stmt->bind_param("s",$p_code);
   $stmt->execute();
   $res = $stmt->get_result();
   $r = $res-fetch_assoc();
   $code = $r['p_code'];

   if(!$code){
     $query = $conn->prepare("INSERT INTO heroku_adaaf59afa8e08a.cart (p_name,p_price,p_image,c_qty,tot_price,p_code) VALUES (?,?,?,?,?,?); ");
     $query->bind_param("sssiss",$p_name,$p_price,$p_image,$p_qty,$p_price,$p_code);
     $query->execute();

     echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Item added to your cart!</strong>
          </div>';
   }else{
     echo '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Item already added to your cart!</strong>
          </div>';
   }
 }
?>
