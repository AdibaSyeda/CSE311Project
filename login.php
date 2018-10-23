<?php


    include("connect.php");
    include("function.php");

    $email ="";
    $pw = "";
    $error = "";


    if(isset($_POST['submit']))
    {
    	$email = $_POST['email'];
    	$pw = $_POST['pw'];

    	if(email_exist($email,$conn))
    	{
    		$result = mysqli_query($conn,"SELECT pw FROM user  WHERE email = '$email'");
    		$retrievepw = mysqli_fetch_assoc($result);

    		if($retrievepw['pw']!==$pw)
    		{
    			$error = "Password is incorrect";
    		}

    		else
    		{
    			$_SESSION['email'] = $email;
    			header("location: home.php");

    		}

    	}

    	
     else
     {
    

    	$error = "Email does not exist";
     }

    }


    

?>













<!DOCTYPE HTML>
<html>

    <head>

        <title>LogIn</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <style>

          a 
          {
              
	        text-decoration:none;
	        display:inline-block;
	        color:#666;
	        padding:14px;
	        background-color:#F8F8F8;
          }


        a:hover
           {
	        color:#000;
	        background-color:#eee;
            }
          

        </style>

    </head>


    <body>


        <div id = "error" > <?php echo $error; ?> </div>
    	<div id = "wrapper" >


    		
	                      


	                      
	                    
			<a href="index.php">Sign Up</a>
			<a href="login.php">Login</a>
			


    		


    		


            <div style="width:200px;margin:0px auto;padding: 40px">
            <form method="POST" action = "">
           

    		Email : <br>
            <input type = "text" name = "email"/> <br> <br>
            Password : <br>
            <input type = "password" name = "pw"/> <br> <br>

             <input type = "submit" name = "submit" value="Login" />

            </form>
         </div>
        </div>




    </body>



</html>