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
if(!$conn){
die("connection failed: ".mysqli_connect_error());
exit();
}
$sql = "SELECT * FROM users WHERE email='$e' AND password='$p'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $e && $row['password'] === $p) {
                
                echo "Logged in!";
			}
			else{
				echo "sign up please";
			}
		}
?>
</body>
</html>