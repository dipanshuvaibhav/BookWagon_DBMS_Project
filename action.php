<?php
session_start();
 require 'config.php';

 if(isset($_POST['pid'])){
   $pid = $_POST['pid'];
   $user_id = $_POST['usr_id'];
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_image = $_POST['p_image'];
   $p_code = $_POST['p_code'];
   $p_qty = 1;

   $stmt = $conn->prepare("SELECT p_code FROM heroku_adaaf59afa8e08a.cart WHERE p_code=? && cust_id=?");
   $stmt->bind_param("si",$p_code,$user_id);
   $stmt->execute();
   $res = $stmt->get_result();
   $r = $res->fetch_assoc();
   $code = $r['p_code'];

   if(!$code){
     $query = $conn->prepare("INSERT INTO heroku_adaaf59afa8e08a.cart (cust_id,p_name,p_price,p_image,c_qty,tot_price,p_code) VALUES (?,?,?,?,?,?,?)");
     $query->bind_param("isssiss",$user_id,$p_name,$p_price,$p_image,$p_qty,$p_price,$p_code);
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

 if(isset($_GET['cartItem']) && isset($_GET['cartItem'])=='cart-item'){
   $user_id = $_SESSION['id'];
   $stmt = $conn->prepare("SELECT * FROM heroku_adaaf59afa8e08a.cart WHERE   cust_id=?");
   $stmt->bind_param("i",$user_id);
   $stmt->execute();
   $stmt->store_result();
   $rows = $stmt->num_rows;

   echo $rows;
 }
 if(isset($_GET['remove'])){
   $user_id = $_SESSION['id'];
   $id = $_GET['remove'];
   $stmt= $conn->prepare("DELETE  FROM heroku_adaaf59afa8e08a.cart WHERE c_id=? && cust_id=?");
   $stmt->bind_param("ii",$id,$user_id);
   $stmt->execute();

   $_SESSION['showAlert']='block';
   $_SESSION['message']='Item removed from the cart!';
   echo "<script type='text/javascript'>window.location='cart.php';</script>";
 }
 if(isset($_POST['qty'])){
    $qty = $_POST['qty'];
    $pid = $_POST['pid'];
    $pprice = $_POST['pprice'];
    $user_id = $_SESSION['id'];

    $tprice = $qty*$pprice;

    $stmt = $conn->prepare("UPDATE heroku_adaaf59afa8e08a.cart SET c_qty=? ,tot_price=?  WHERE c_id=? && cust_id=? ");
    $stmt->bind_param("isii",$qty,$tprice,$pid,$user_id);
    $stmt->execute();

 }
 if(isset($_POST['action']) && isset($_POST['action']) == 'order'){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $products = $_POST['products'];
   $grand_total = $_POST['$grand_total'];
   $address = $_POST['address'];
   $pmode ="Online payment";
   $cust_id=$_SESSION['id'];

   $data = '';
   $stmt = $conn->prepare("INSERT INTO heroku_adaaf59afa8e08a.order(customer_id,o_name,o_email,o_phone,o_address,o_pmode,o_products,o_amt_paid) VALUES (?,?,?,?,?,?,?,?)");
   $stmt->bind_param("isssssss",$cust_id,$name,$email,$phone,$address,$pmode,$products,$grand_total);
   $stmt->execute();
   $data .= '"<div class="text-center">
              <h1 class="display-4 mt-2 ">Thank you!</h1>
              <h2 class="text-success">Your Order has been placed successfully!</h2>
              <h4>Items purchased : '.$products.'</h4>
              <h4>Your name : '.$name.'</h4>
              <h4>Your Phone : '.$phone.'</h4>
              <h4>Total amount Paid : '.number_format($grand_total,0).'</h4>
              <h4>Payment Mode : '.$pmode.'</h4>
            </div>"';
            // deleting the cart after order has been placed
  $dell= $conn->prepare("DELETE  FROM heroku_adaaf59afa8e08a.cart WHERE  cust_id=?");
  $dell->bind_param("i",$cust_id);
  $dell->execute();

  echo $data;

 }
?>
