<html>
<head>
<title>admin pannel</title>
<style>
*{
margin: 0px;
padding :0px;

}
body{

background:yellow;
}
.add{
		margin-left: 400px;
		margin-top :50px;
}
.size{
		margin-left:250px;
		margin-top :20px;
		
}
.sizes{
	margin-left:250px;
	margin-top: -15px;
	width: 300px;
}
.sizer{
margin-left:150px;
}

.regis {
margin-left:600px;
width :100px;
}

h3{
	position:relative;
	left:90px;
	size; 20px;
	margin-left:50px;
}
</style>

<script type="text/javascript" language="javascript">
function validate()
		{

			alert("question add successfully");

		}



	</script>
</head>
<body>
<div class="add">
<form action="" method="POST" onsubmit="return validate()">
<h3>Enter the Question number .</h3>
	<input class="size" type="text" name="question" required><br><br>
	<h3>Enter the Question.</h3><br>
	<input class="sizes" type="text" name="question" required><br><br>
	<h3>Enter the option.</h3><br>
	<h3>1.</h3>
	<input class="sizes" type="text" name="question" required><br><br>
	<h3>2.</h3>
	
	<input class="sizes" type="text" name="question" required><br><br>
	<h3>3.</h3>
	<input class="sizes" type="text" name="question" required><br><br>
	<h3>4.</h3>
	<input class="sizes" type="text" name="question" required><br><br><br><br><br><br>
</div>

<input class="regis" type="Submit" name="Submit" value="Enter"><br><br>
</form>
</body>
</html>
