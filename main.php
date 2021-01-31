<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<style>
	

	body{
	background-color : pink;
	}
				*{
				margin: 0px;
				padding: 0px;
				}
			.user {
			color: red;
			
			margin-left :500px;
			margin-top : 200px;
			border :1px solid black;
			background :purple;
			width :150px;
			height :30px;
			}
			.user a{
			color :white;
			padding-left :40px;
			text-decoration : none;
			display : block;
			}
			
			.admin{
			border: 1px solid black;
			width :150px;
			height :30px;
			
			margin-left :0px;
			margin-top: 50px;
			font-size : 20px;
			background-color :green;
			color: yellow;
			}
			
			.admin a{
			text-decoration : none;
			color :yellow;
			display :block;
					}
	</style

	
</head>
<body>
	<div class="back">
<form action="registrationdb.php" method="POST" onsubmit="return validate()">
	<div class="user">
		
		<a href="adminlogin.php">ADMIN</a>
		
		<div class="admin">
			<a href="registration.php">USER</a>

		</div>
	</div>
</form>
						

					
</div>
</body>
</html>