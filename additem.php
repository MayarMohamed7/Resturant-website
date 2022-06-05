<?php
session_start();


if(isset ($_POST["additem"])){
	//$name = $_POST['title'];
    //$price = $_POST['price'];
   // $quantity = $_POST['qty'];
     $_SESSION['cart'][] = array('name'=>$_POST['title'],
	                              'price'=>$_POST['price'],
	                             'qty'=>$_POST['qty']);
	     header("location:homepage.php");

}

?>

