<?php
session_start();
?>
<html>
<head>
	
<link rel="stylesheet" href="style.css">
	
</head>
<body>
	
<div class="lbox">
	
<h1> Login </h1> <br>
	
<form method = "post" action = "homepage.php">
<label>Email </label>
<input type = "text" name = "email"><br>
<label>Password </label>
<input type = "password" name = "pass"> <br>
<input type = "submit" value = 'submit'>
Don't have an account? <a href = "signup.php"> Sign up </a>
</form>
	
</div>
	
<?php
$e = $_POST['email'];
$p = $_POST['pass'];
$servername = "localhost";
$username = "root";
$password = "";
$DB = "project";
$conn = mysqli_connect($servername, $username, $password, $DB);
if(isset($_POST['submit'])){	
$sql = "SELECT * FROM users WHERE email='".$_POST["email"]."' AND password='".$_POST["pass"]."'";
$result = mysqli_query($conn, $sql);

if (($row=mysqli_fetch_array($result))
{   
   $_SESSION["email"]=$row["email"];
   $_SESSION["pass"]=$row["password"];
    header("Location:homepage.php");
}
	
     else
     {
       ?>
	   <p class= "error"> <?php echo("An email with this password doesn't exist.Sign up please.");?> </p>
	<?php 
     }
}
?>
</body>
</html>
