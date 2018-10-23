
    	
<?php 
    
    include("connect.php");

    $error = "";
    $fname ="";
    $lname ="";
    $email="";
    $pw = "";
    $gender ="";
     $image = "";
     $tmp_image = "";

    if(isset($_POST['submit']))
    {
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pw = $_POST['pw'];
        $gender = $_POST['gender'];
        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];

       
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
}

  $userQuery = "INSERT INTO user(fname,lname,email,pw,gender,image) VALUES('$fname','$lname','$email','$pw','$gender','$image')";
    if(mysqli_query($conn,$userQuery))
    {
        if(move_uploaded_file($tmp_image, "images/$image"))
        {
            $error = "You are successfully registered";
        }
        else
            $error = "Image not uploaded";
    }

    
        



?>


<!DOCTYPE HTML>
<html>

    <head>

        <title>Sign up</title>
        <link rel ="stylesheet" href = "css/styles.css">
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

        <div id ="error"><?php echo $error; ?> </div>
        <div id = "wrapper">
                <a href="index.php">Sign Up</a>
                <a href="login.php">Login</a>

            
                <div style="width:270px;margin:0px auto;">
                <h2 style ="margin-left: 30px">SIGN UP</h2>
                <form method="POST" action = "" enctype="multipart/form-data">
                    First Name : <br>
                    <input type = "text" name = "fname"/> <br> <br>
                    Last Name : <br>
                    <input type = "text" name = "lname"/> <br> <br>
                    Email : <br>
                    <input type = "text" name = "email"/> <br> <br>
                    Password : <br>
                    <input type = "password" name = "pw"/> <br> <br>
                    Gender : 
                    <input type = "radio" name = "gender" value =  "male" checked> Male 
                    <input type = "radio" name = "gender" value =  "female"> Female 
                    <input type = "radio" name = "gender" value =  "male"> Other <br> <br>
                    <label> Image :  </label>
                    <input type = "file" name = "image" /><br> <br>
                    <input type = "submit" name = "submit"/>
                    <input type="reset" >
                </div>

                


                </form>
            

        </div>

    </body>




</html>

        	
        		

    




