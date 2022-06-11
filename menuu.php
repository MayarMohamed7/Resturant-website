<html lang="en-US">
    
    <head>
    <meta charset="UTF-8">                                                 <!-- covers almost all of the characters and symbols in the world! -->
    <style>
body{

    background-image: url("pic.jpeg");
}
.topnav{
				background-color: black;
				overflow:hidden;
				color: white;
				font-size: 17px;
				padding: 14px 16px;
			}
			.topnav a{
				float:left;
				display:block;
				color: white;
				text-align: center;
				padding: 0px 16px;
				text-decoration: none;
				font-size: 17px;
			}
			.topnav a:hover{
				background-color: green;
				color: white;
			}
		</style>
	</head>
	<body>		
		<div class="topnav">
			<?php
				if(!empty($_SESSION['ID'])) 
				{
					echo "Welcome ".$_SESSION['Name'];
					echo"<a href='Home.php'>Home</a>";
					echo"<a href='add-1.php'>Add Cashier</a>";
					echo"<a href='Delete.php'>'Delete Cashier</a>";
                    echo"<a href='Update2.php'>Update Cashier</a>";
                    echo"<a href='ViewAll.php'>View All Cashier</a>";
                    echo"<a href='Search.php'>Search</a>";
				}
				else
				{
					echo"<a href='Home.php'>Home</a>";
					echo"<a href='add-1.php'>Add Cashier</a>";
					echo"<a href='Delete.php'>Delete Cashier</a>";
                    echo"<a href='Update2.php'>Update Cashier</a>";
                    echo"<a href='ViewAll.php'>View All Cashiers</a>";
                    echo"<a href='Search.php'>Search</a>";
				}
				?>
		</div>
		<br><br>
	</body>
</html>


