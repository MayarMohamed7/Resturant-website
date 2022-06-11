<?php
session_start();


if(isset ($_POST["additemcash"])){
    //$name = $_POST['title'];
    //$price = $_POST['price'];
   // $quantity = $_POST['qty'];
     $_SESSION['cartcash'][] = array('name'=>$_POST['title'],
                                  'price'=>$_POST['price'],
                                 'qty'=>$_POST['qty']);
         header("location:cash2.php");

}

?>
