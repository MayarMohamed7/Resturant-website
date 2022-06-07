<html>
	<head>
		<style>
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
					echo"<a href='home.php'>Home</a>";
					echo"<a href='addclient.php'>Add Client</a>";
					echo"<a href='deleteclient.php'>'Delete Client</a>";
                    echo"<a href='updateclient.php'>Update Client</a>";
                    echo"<a href='viewallclients.php'>View All Clients</a>";
                    echo"<a href='search.php'>Search</a>";
				}
				else
				{
					echo"<a href='home.php'>Home</a>";
					echo"<a href='addclient.php'>Add Client</a>";
					echo"<a href='deleteclient.php'>Delete Client</a>";
                    echo"<a href='Updateclient.php'>Update Client</a>";
                    echo"<a href='viewallclients.php'>View All Clients</a>";
                    echo"<a href='Search.php'>Search</a>";
				}
				?>
		</div>
		<br><br>
	</body>
</html>