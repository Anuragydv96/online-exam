
<?php

    session_start();


    if(isset($_REQUEST['fname']))
{
    $user=$_REQUEST['fname'];

    $SESSION['user'] = $user;
}

    $host="localhost";
    $user="root";
    $pass="";
    $db="onlineexam";

    mysql_connect($host,$user,$pass);
    mysql_select_db($db);

    if (isset($_POST['fname']))
    {
            $Gsmail=$_POST['fname'];
            $password=$_POST['password'];

        $query="SELECT * FROM `registrations` WHERE Email='$Gsmail' AND Code='$password' limit 1";
        $data=mysql_query($query);

        if(mysql_num_rows($data)==1)
        {
        header('location:xmz.php');
        exit();
    }
        else
    {
           header('location:login.php');
            exit();
    }
}
?>












<html>
    <head>
    <title>login</title>
        <style>
            *{
                margin: 0px;
                padding: 0px;
            }
        .signIn{
            position: absolute;
            left: 550px;
            top: 120px;
            background-color: rgba(0,0,0,0.1);
    width: 400px;
    height: 300px;
   padding-left: 40px;
    padding-top: 30px;
    
}
            .back{
    width: 100%;
    height: 100vh;
    background-image:url(2.jpg);
       background-size: cover;
                overflow: hidden;
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
            
            .upper ul{
                list-style: none;
            }
            .upper ul li{
                float: right;
                display: inline-block;
                margin: 10px;
                width: 150px;
                height: 30px;
             margin-left: 5px;
               
            }
            
            .upper ul li a{
                text-decoration: none;
                margin-top: 5px;
                color: aliceblue;
                display: block;
                text-align: center;
                text-transform: capitalize;
            }
            
            .upper ul li:hover{
             transition: 1s;
                
                border-bottom: 1px solid white;
                border-top: 1px solid white;
            }
            
              .upper ul ul{
                list-style: none;
                   display: none;
            }
            
            .upper ul ul li{
                margin-left: 5px;
                position: relative;
                height: 45px;
                line-height: 35px;
                left: 8px;
               z-index: 1;
                 background-color: rgba(0,0,0,0.2);
                margin-bottom: -12px;
                border-bottom: 2px solid white;
                
            }
            
            .upper ul li:hover>ul{
                display: block;
               
            }
            .upper ul ul ul{
                list-style: none;
            }
            
            .upper ul ul ul li{
                position: relative;
                left: 163px;
                top: -50px;
            }
            
            .upper ul ul li:hover>ul{
                display: block;
            }
            
            
            .left{
                position: absolute;
                width: 250px;
                height: 100vh;
             
                background-color: rgba(0,0,0,0.2);
            }
            
            .left ul{
                list-style: none;
                
            }
            .left ul li{
               
               height: 50px;
                border-bottom: 1px solid white;
            }
            
            .left ul li a{
                text-transform: capitalize;
                color: aliceblue;
                text-decoration: none;
                font-size: 15px;
                display: block;
                line-height: 50px;
                text-align: center;
            }
            .left ul li:hover{
                background-color: #7F84EF;
                transition: 1s;
            }
            
            .upper img{
                width: 10px;
                height: 10px;
                position: relative;
                left: 10px;
            }



        </style>
    </head>
    <body>
    
        <div class="back">
            
           <div class="upper">
            
     <ul>
               
               <li><a href="#">home</a></li>
               <li><a href="#">course</a></li>
               <li><a href="#">about</a></li>
               <li><a href="#">test<img src="drop-down-arrow-icon-53.png" alt="logo"></a>
                
        <ul>
                    <li><a href="#">Bca</a></li>
                    <li><a href="#">Mca<img src="Blue_Arrow_PNG_Clip_Art.png" alt="logo"></a>
                    
                <ul>
                        <li><a href="#">MCA 1st</a></li>
                        <li><a href="#">MCA 2nd</a></li>
                        <li><a href="#">MCA 3rd</a></li>
                        <li><a href="#">MCA 4th</a></li>
                        <li><a href="#">MCA 5th</a></li>
                        <li><a href="#">MCA 6th</a></li>
                        
                </ul>
                    
                    
                    
                    </li>
                    <li><a href="#">Mba</a></li>
                    <li><a href="#">PGDM</a></li>
                    <li><a href="#">ITI</a></li>
         </ul>
                
                
                </li>
               <li><a href="#">gallery</a></li>
                <li><a href="#">developer</a></li>
    </ul>
            
            
            
            </div> 
            <div class="image">
               <span></span>
                <span></span>
                 <span></span>
                  <span></span>

            </div>
            
         <div class="left">
            
            <ul>
               
               <li><a href="#">home</a></li>
               <li><a href="#">course</a></li>
               <li><a href="#">about</a></li>
               <li><a href="#">text</a></li>
               <li><a href="#">gallery</a></li>
                <li><a href="#">developer</a></li>
            </ul>
        </div> 
            <form action="" method="POST">
            <div class="signIn">
                <input id="size" type="text" name="fname" placeholder="Enter your Gmail id" required><br>
                <input id="size" type="password" name="password" placeholder="Enter your Password" required><br>
                <input type="submit" name="login" value="Login" class="login">
            </div>
             </form>
        </div>
       
    </body>
</html>