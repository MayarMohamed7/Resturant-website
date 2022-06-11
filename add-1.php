<?php
if (empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['pass']) ||
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
	
$sql = "INSERT INTO `users`(`name`, `email`, `pass`) VALUES ('$n','$e', '$p')";
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


<?php include "menuu.php";?>

 
<form action="" method="post">
  Name
  <input type="text" name="name"><br>
  Email:<br>
  <input type="text" name="email"> <br> 
  Password:<br>
  <input type="Password" name="password"><br>
  onfirm Password:<br>
  <input type="Password" name="password"><br>
  
  <input type="submit" value="Submit" name="Submit">
 
</form>
<style>
        form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
    </style>
