<?php
	include 'config.php';
    $str= $_POST['search'];
	$stmt = $conn->prepare('SELECT * FROM heroku_adaaf59afa8e08a.product where p_name like '%$str%';');
	$stmt->execute();
    $result = $stmt->get_result();
    echo "<script type='text/javascript'>alert('successfully!');
    window.location='blogpost.php';
    </script>";
    //while($row = $result->fetch_assoc()):
?>
