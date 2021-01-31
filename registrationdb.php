<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="onlineExam";

	$conn=new mysqli($host,$user,$pass,$db);

	$name=$_POST['name'];
	$course=$_POST['course'];
	$Gmail=$_POST['Gmail'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	
	$password=$_POST['password'];
	$c_password=$_POST['c_password'];

	$sql="INSERT INTO `onlineexam`.`registrations` (`Username`, `Course`, `Email`, `Mobile`, `Address`,`Code`) VALUES ('$name', '$course', '$Gmail', '$phone', '$address','$c_password')";

	if(mysqli_query($conn,$sql))
	{
		header('location:login.php');
	}
	else
	{
		echo "error";
	}

?>