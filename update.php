<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php
 include "menuu.php";
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "";
 session_start();
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 $query = "SELECT * FROM user";
 $result = mysqli_query($conn,$query);
 
?>
<!DOCTYPE html>
<html>
<head>  
</head>
<body>
<table>
<tr>
<td>Id</td>
<td>Name</td>
<td>Email id</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
 
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["Id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><a href="updateaction.php?userid=<?php echo $row["Id"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>
