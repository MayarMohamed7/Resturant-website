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
if(isset ($_POST["subrating"])){
 
$sql = "INSERT INTO `ratings`(`custemail`, `food`, `rating`) VALUES ('".$_SESSION['email']."','".$_POST['title']."','".$_POST['rate']."')";
if($conn->query($sql) === TRUE){
echo "<script> alert('Your rating was saved!') </script>";
header("Location:homepage.php");

}


}
}
?>