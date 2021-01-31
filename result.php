
<?php

	$conn=mysqli_connect('localhost','root');
	if($conn)

	mysqli_select_db($conn,'quiz');




if(isset($_POST['submit']))
{
	if(!empty($_POST['quiztest']))
	{
		$count=count($_POST['quiztest']);

	


			$result=0;
			$i=1;

		$selected=$_POST['quiztest'];
		print_r($selected);



		$q="select * from questions";

		$query=mysqli_query($conn,$q);

		while($rows=mysqli_fetch_array($query))
		{
			print_r($rows['Ansid']);



				$checked=$rows['Ansid']==$selected[$i];

				if($checked)
				{
					$result++;
				}
				$i++;
				
}
		

}
}
		


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">

		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			background-color: purple;

		}
		
		.result{
			width: 500px;
			position: absolute;
			top: 45%;
			height: 100px;
			border-radius: 1px solid;
			background-color: pink;
			border: 3px solid white;
			left: 5%;
			font-size: 20px;
			padding-left: 10%;
			padding-top: 25px;
			border-radius: 10px;
			box-shadow: 3px 3px grey;
				text-transform: capitalize;
		}

		.main h2{
			width: 500px;
			height: 70px;
			position: absolute;
			left: 30%;
			color: white;
			padding-left: 10%;
			background-color: grey;
			border:3px solid;
			padding-top: 15px;
			border-radius: 10px;
			text-transform: capitalize;
		}

				.counts{
					position: absolute;
					left: 5%;
					top: 20%;
					width: 500px;
					height: 100px;
					background-color: green;
					border:3px solid white;
					padding-left: 7%;
					font-size: 20px;
			padding-top: 25px;
			border-radius: 10px;
			box-shadow: 3px 3px grey;
			text-transform: capitalize;
				}

				.Back{
				top: 80%;
				position: absolute;
				left: 42%;
				background-color: #5087F6;
				width: 100px;
				font-size: 16px;
				border-radius: 25px;
				height: 35px;
			}

			.Back:hover{
				background-color: #52A435;
			}

	</style>
</head>
<body>

	<div class="main">
		
		<h2> Your result is here...</h2>
	</div>


	<div class="counts">
		
			<?php
					echo "out of 5 you have attempts :-"  .$count." Questions";
			?>

	</div>

	<div class="result">
		<?php
		echo "your total score is : ".$result;

		?>

	</div>

	<a href="login.php"><input class="Back"type="submit" name="Submit" value="Back"></a>

</body>
</html>