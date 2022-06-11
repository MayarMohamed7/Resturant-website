<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Cairo GRND Restuarant</title>
<link rel="icon" type="image/x-icon" href="Cairo GRND Restaurant.png">
<meta charset="UTF-8">
</head>
<body>
<div class="lbox">
<h1> Login </h1> <br>
<form method = "post" action = "">
<label>Email </label>
 <input type = "text" name = "email"><br>
<label>Password </label>
<input type = "password" name = "pass"> <br>
<input type = "submit" value = "submit" name="submit">
Don't have an account? <a href = "signup.php"> Sign up </a>
</form>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "project";
$conn = mysqli_connect($servername, $username, $password, $DB);
if(isset($_POST['submit'])){
	if(empty($_POST['pass']) ||
    empty($_POST['email'])){?>
   <p class= "error"> <?php echo('Please fill all required fields!');?> </p>
<?php }
else{
	$domain = substr($_POST['email'], strpos($_POST['email'],'@')+1);
		   if ($domain=="cashier.com"){
			    $sql2 ="SELECT * FROM `cashiers` WHERE email='".$_POST["email"]."' AND pass='".$_POST["pass"]."'";
			     $res = mysqli_query($conn, $sql2);
			     if ($row2 = mysqli_fetch_array($res)) {
                   $_SESSION["email"]=$row2["email"];
		           $_SESSION["pass"]=$row2["password"];
			       header("Location:cash1.php");
			    }
		    } 
	else{
		
$sql = "SELECT * FROM users WHERE email='".$_POST["email"]."' AND password='".$_POST["pass"]."'";

        $result = mysqli_query($conn, $sql);

        if ($row=mysqli_fetch_array($result)) {
               
            $_SESSION["email"]=$row["email"];
		    $_SESSION["pass"]=$row["password"];
			header("Location:homepage.php");
		}
		else if($_POST["email"]=="qualityc@gmail.com" && $_POST["pass"]== "qualityc911"){
			header("Location:qualityc.php");
		}
		else if($_POST["email"]=="cashier1@gmail.com" && $_POST["pass"]== "cashierv"){
			header("Location:cashierv.php");
		}
			else{
				?>
	             <p class= "error"> <?php echo("An email with this password doesn't exist.Sign up please.");?> </p>
				<?php 

			    }
		    }
    }
}
		?>
</body>
</html>
