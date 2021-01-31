<?php

	$host="localhost";
	$user="root";
	$pass="";
	$db="onlineexam";

	mysql_connect($host,$user,$pass);
	mysql_select_db($db);

	if (isset($_POST['fname']))
	{
			$Gmail=$_POST['fname'];
			$password=$_POST['password'];

		$query="SELECT * FROM `registrations` WHERE Email='$Gmail' AND Code='$password' limit 1";
		$data=mysql_query($query);

		if(mysql_num_rows($data)==1);
		{
		echo "successfull";
		exit();
	}
		else
	{
			echo "wrong password";
			exit();
	}
}
?>