<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<link rel="stylesheet" type="text/css" href="registration.css">

	<script type="text/javascript">
function validate()
		{

			var pwd1=document.getElementById("pwd1").value;
			var pwd2=document.getElementById("pwd2").value;

			if(pwd1!=pwd2)
			{
				alert("passwords are not matched");
				return false;
			}
			return true;
		}


		



	</script>
</head>
<body>
	<div class="back">
<form action="registrationdb.php" method="POST" onsubmit="return validate()">
	<div class="signup">
		<input class="size" type="text" name="name" placeholder="Username" required><br>
		<input class="size" type="text" name="course" placeholder="Course" required><br>
		<input class="size" type="text" name="Gmail" placeholder="Gmail" required><br>
		<input class="size" type="text" name="phone" placeholder="Phone number" required><br>
		<input class="size" type="text" name="address" placeholder="Address" required><br>
		<input class="gen" type="radio" name="gender">Male
		<input class="gen" type="radio" name="gender">Female<br>
		<input class="size" type="password" name="password" placeholder="password" id="pwd1" required><br>
		<input class="size" type="password" name="c_password" placeholder="confirm password" id="pwd2" required><br>
		<input class="regis" type="Submit" name="Submit" value="Submit">
		
		<div class="login">
			<a href="login.php">Login</a>

		</div>
	</div>
</form>
						<div class="collage">
							<h1>ITS COLLAGE GHAZIABAD</h1>
						</div>

		<div id="typewriter">
			
			<h2>welcome to online test</h2>
		</div>				
</div>
</body>
</html>