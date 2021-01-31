<?php

    $host="localhost";
    $user="root";
    $pass="";
    $db="admin";

    mysql_connect($host,$user,$pass);
    mysql_select_db($db);

    if (isset($_POST['fname']))
    {
            $gsmail=$_POST['fname'];
            $password=$_POST['password'];

        $query="SELECT * FROM `adminlogin`WHERE gmail='$gsmail' AND passwrd='$password' limit 1";
        $data=mysql_query($query);

        if(mysql_num_rows($data)==1)
        {
        header('location:adminpannel.php');
        exit();
    }
        else
    {
           header('location:adminlogin.php');
            exit();
    }
}
?>

<html>
<head>
<title>admin login form</title>

<style>
body{
background-color:grey;
}
		 *{
                margin: 0px;
                padding: 0px;
            }
        .signIn{
            position: absolute;
            left: 450px;
            top: 120px;
            
    width: 400px;
    height: 300px;
   padding-left: 40px;
    padding-top: 30px;
    
}

#size{
   
    width: 350px;
    margin: 10px;
    height: 40px;
    background-color: rgba(0,0,0,0.1);
    border-radius: 50px;
    color: white;
    padding-left: 35px;
}
    .login{
    width: 100px;
    height: 35px;
    background-color: lightgreen;
    position: relative;
    left: 130px;
                color: aliceblue;
    top: 20px;
    border: none;
    border-radius: 50px;
    
}
            .login:hover{
                background: linear-gradient(green,red)
            }    

	
}

</style>
</head>

<body>
		<form action="" method="POST">
            <div class="signIn">
			<h4>Gmail</h4>
			<div class="box">
                <input id="size" type="text" name="fname" placeholder="Enter your Gmail id" required><br>
                </div>
				<h4>Password</h4>
				<div class="box">
				<input id="size" type="password" name="password" placeholder="Enter your Password" required><br>
					</div>
			   <input type="submit" name="login" value="Login" class="login">
            </div>
         </form>

</body>

</html>