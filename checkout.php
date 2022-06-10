<html>
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Cairo GRND Restuarant-CheckOut</title>
<link rel="icon" type="image/x-icon" href="Cairo GRND Restaurant.png">
<meta charset="UTF-8">

<style>
.pbox{
width: 360px;
	height: 330px;
	margin: 30px auto;
	margin-top: 100px;
	background-color: white;
	border-radius: 2px;
	
}
form.input{
	
	border-radius: 6px;
	border: 1px solid gray;
}


.submit {
  width: 200px;
  color: white;
  background-color:#ac7e54;
  font-size: 20px;
  margin-left: 75px;
  margin-top: 50px;
  

}


</style>
</head>
<body  style = "background-color:#D3D3D3;">
<div class="pbox">
<form method="POST" action ="">
<h1 align = "center"  style ="color: #ac7e54; font-family: 'Times New Roman', Times, serif; padding:7px;">&#128608 CHECK OUT &#128609 </h1> <br>
<input type = 'radio' style = "margin-left:20px; margin-bottom:20px; padding:20px;" class="pay" id='visa' name = "pay" value = "Visa">
<label for="visa" style="margin-left:20px; padding:20px; font-size:20px; font-family: 'Times New Roman', Times, serif;" >Visa</label><br>
<input type = 'radio' style = "margin-left:20px; padding:20px; margin-bottom:20px;" class="pay" id='cash' name = "pay" value = "Cash">
<label for="cash" style=" margin-left:20px; padding:20px;font-size:20px; font-family: 'Times New Roman', Times, serif;">Cash</label><br>
<button class="btn submit" type="submit" name="finish"> Finish Order </button> <br>        
</form>
</div>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$DB = "project";
$conn = mysqli_connect($servername, $username, $password, $DB);
if(!$conn){
die("connection failed: ".mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST['finish'])){
	$custemail = $_SESSION["email"]; 
   $way = $_POST["pay"];
  $date = date("Y-m-d h:i:sa");

$sql = "INSERT INTO `orders`( `custemail`, `pay_meth`, `date`) VALUES ('$custemail','$way','$date')";
if(mysqli_query($conn,$sql)){

	      $order_id = mysqli_insert_id($conn); //return the id of the last query(kol queryb byba leha id hwa byrg3ha)
		 $sql2 = "INSERT INTO `orderdet`(`order_id`, `food_name`, `qty`, `price`) VALUES (?,?,?,?)";
		$stmt = mysqli_prepare($conn,$sql2); //prepare a sql stamtment to excute; 
		//it returns statment obj if success if not then false 
		 if($stmt){
			 mysqli_stmt_bind_param($stmt,"isii",$order_id,$name,$qty,$price); //ele hydkhol b3d kda hyba int string int int
			 foreach($_SESSION['cart'] as $key => $val){
				 $name = $val['name'];
				 $price = $val['price']*$val['qty'];
				 $qty = $val['qty'];
				 mysqli_stmt_execute($stmt);
			    }
			 unset($_SESSION['cart']);
			 ?>
	         <p class= "success"> <?php echo("Ordered successfully.");?> </p>
	        <?php
			 header("Location:homepage.php");
			 
		    }
		 else{?>
	        <p class= "error"> <?php echo("Error.");?> </p>
                <?php  
		    }
	}
  
  
  else{?>
	 <p class= "error"> <?php echo("Failed to order.");?> </p>
<?php  
  header("Location:homepage.php");
  }
 
  }
  }

?>
</body>
</html>