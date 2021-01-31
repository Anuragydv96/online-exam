
<?php

	session_start();

		


	$conn=mysqli_connect('localhost','root');
	if($conn)

	mysqli_select_db($conn,'quiz');
			
?>



<!DOCTYPE html>
<html>
<head>
	<title>image</title>
	<style>
		
		*{
			margin: 0px;
			padding: 0px;
			background-color: brown;
			color: white;
			font-size: 25px;
			box-sizing: border-box;

		}

			.page{
				position: absolute;
				margin-bottom: 65px;
				margin-top: 30px;
				left: 15%;
			}

			.next{
				margin-top: 50px;
				margin-left: 46%;
				background-color: blue;
				width: 100px;
				font-size: 20px;
				border-radius: 25px;
			}

				.heads{
					color: yellow;
					margin:15px;
					margin-left: -20px;
					font-size: 22px;
				}


				.qbody{
					color: pink;
					font-size: 20px;

				}


				.topani h2{
					margin-left: 30%;
					border: 2px dotted;
					width: 550px;
					height: 70px;
					padding-left: 55px;
					margin-top: 25px;
					padding-top: 5px;
					font-size: 40px;
					text-transform: capitalize;
					animation: animate 1s linear infinite;
					}

					@keyframes animate{
						0%{
							color: blue;
						}
						35%{
							color: white;
						}
						70%{
							color: grey;
						}
						100%{
							color: green;
						}
					}
	</style>
</head>
<body>

		<div class="topani">
			
				<h2>Welcome to online Exam</h2>

		</div>


	<form action="result.php" method="POST">	
<div class="page">
<?php
for($i=1;$i<6;$i++)
{
		$q="select * from questions where Qid=$i";
		$query=mysqli_query($conn,$q);

		while ($rows=mysqli_fetch_array($query) ) {
?>
		<div class="card">
	<h4 class="heads"> 
		<?php
		 echo $rows['Question'];
	  ?>  
	</h4>


						<?php

						$q="select * from answers where Ans_id=$i";
				$query=mysqli_query($conn,$q);

				while ($rows=mysqli_fetch_array($query) ) {
				?>

				<div class="qbody">
					<input type="radio" name="quiztest[<?php echo $rows['Ans_id'];?>]"value="<?php echo $rows['Ansid'] ;?>">
					
					<?php echo $rows['Answer']; ?>
						

				</div> 
		
		

<?php
	}
}
}
?>
		<input type="submit" name="submit" value="submit" class="next">

</form>

</div>
</div>
</body>
</html>