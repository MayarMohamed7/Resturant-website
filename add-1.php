<?php
$server="localhost";
$username="root";
$password="";
$dbname="ziad";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['submit'])){
  $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    if ($email == true) {
    
      } else {
        echo("$email is not a valid email address");
      }
     if( strlen($_POST["password"])<6)
     {
        echo("Password Not valid");
     }
  
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['age'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$age=$_POST['age'];
$query = "insert into clients(firstname,lastname,email,password,age) values('$firstname' ,'$lastname' ,'$email' ,'$password' , '$age')";
$run=mysqli_query($conn,$query) or die(mysqli_error());
if($run){
    echo "data submited succesfully";
}
else
{
    echo "data not submitted ";
}
}
else{
echo "all fileds required";
}
}
?>

<?php include "menuu.php";?>

 
<form action="" method="post">
  FirstName:<br>
  <input type="text" name="firstname"><br>
  LastName:<br>
  <input type="text" name="lastname"><br> 
  Email:<br>
  <input type="text" name="email"> <br> 
  Password:<br>
  <input type="Password" name="password"><br>
  Age:<br>
  <input type="text" name="age"><br>
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
