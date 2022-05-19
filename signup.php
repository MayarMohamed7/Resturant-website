<?php
session_start();
?>

<html>

<head>	
<link rel="stylesheet" href="style.css">
</head>
	
<body>
	
<div class="sbox">
	
<h1> Sign up </h1> <br>
	
<form method = "post" action = "">
<label>Name </label>
<input type = "text" name = "name"><br>
<label>Email</label>
<input type = "text" name = "email"><br>
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
    empty($_POST['cpass'])) {?>
<p class= "error"> <?php echo('Please fill all required fields!');?> </p>
<?php }

elseif ($_POST['pass'] !== $_POST['cpass']) {?>
<p class= "error"> <?php echo("Passwords did not match");?> </p>
 
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
