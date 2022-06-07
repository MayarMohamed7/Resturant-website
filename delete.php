<style>
#x {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#x td, #x th {
  border: 1px solid #ddd;
  padding: 8px;
}

#x tr:nth-child(even){background-color: #f2f2f2;}

#x tr:hover {background-color: #ddd;}

#x th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<?php
include "admin.php";
$server = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
session_start();

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);
$query = "SELECT * FROM clients";
$result = mysqli_query($conn,$query);
if(isset($_POST['save'])){
	$checkbox = $_POST['check'];
	for($i=0;$i<count($checkbox);$i++){
    $del_email = $checkbox[$i]; 
    $sql="DELETE FROM clients WHERE email='".$del_email."'";
	mysqli_query($conn,$sql);
    $message = "Data deleted successfully !";
    echo ($message);
}
}
?>
<html>
<form method="post" action="">
<table class="table table-bordered">
<thead>
<table id="x">
<tr>

	
	<th>First Name</th>
	<th>Last Name</th>
	<th>Email</th>
	<th>Age</th>
    <th>Delete </th>
	 
</tr>
</thead>
<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr>
  
	<td><?= $row['firstname']; ?></td>
    <td><?= $row['lastname']; ?></td>
	<td><?=  $row['email']; ?></td>
	<td><?= $row['age']; ?></td>
    <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["email"]; ?>"></td>
	 
</tr>
<?php
 
}
?>
</table>
<p><button type="submit" class="btn btn-success" name="save">DELETE</button></p>
</form>

</body>
</html>