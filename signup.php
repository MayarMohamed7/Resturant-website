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
	
<div class="sbox">
	
<h1> Sign up </h1> <br>
<form method = "post" action = ""  enctype="multipart/form-data">
<label style="margin-left:3px;"> Upload your photo </label>
 <input type="file" name="file" style="margin-left:3px;">
<label>Name </label>
<input type = "text" name = "name"><br>
<label>Email</label>
<input type = "text" name = "email"><br>
<label>National ID</label>
 <input type = "text" name = "nID"><br>
<label>Password</label>
<input type = "password" name = "pass"> <br>
<label>Confirm password</label>
<input type = "password" name = "cpass"> <br>
<input type = "submit" value = "submit"><br>
</form>
	
</div>
	
<?php
if (empty($_POST['name']) ||
    empty($_POST['pass']) ||
    empty($_POST['email']) ||
    empty($_POST['nID']) ||
    empty($_POST['cpass'])) {?>
<p class= "error"> <?php echo('Please fill all required fields!');?> </p>
<?php }

elseif ($_POST['pass'] !== $_POST['cpass']) {?>
<p class= "error"> <?php echo("Passwords did not match");?> </p>
 
<?php
}
elseif(!filter_var(($_POST["email"]),FILTER_VALIDATE_EMAIL)){?>
	<p class= "error"> <?php echo("Not a valid email!");?> </p>
 <?php	
}
	
else
{
$n = $_POST['name'];
$e = $_POST['email'];
$p = $_POST['pass'];
$servername = 'localhost';
$username = 'root';
$password = "";
$DB = 'project';
$conn = mysqli_connect($servername, $username, $password, $DB);
	
if(!$conn)
{
die("connection failed: ".mysqli_connect_error());
}
	
$sql = "INSERT INTO `users`(`email`, `password`, `name`) VALUES ('$e','$p', '$n')";
if($conn->query($sql) === TRUE)
{
header("Location:http://localhost/homepage.php");
}
	
else
{
echo "ERROR: ".sql." ".$conn->error;
}
	
$conn->close();
}
?>
</body>
</html>
