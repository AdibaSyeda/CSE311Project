<?php

include("connect.php");
include("function.php");

if(logged_in())
{
	

?>


<html>

<head>
	<style>
		#wrapper
		{
			
			background-color: #E6E6FA;
			padding: 40px;
			border-bottom: 2px solid #ADD8E6;
			border-top: 2px solid #ADD8E6;

		}

		a
		{

         float:right; 
         padding:20px; 
         margin-right:40px; 
        background-color: #D3D3D3;
        color:#333; 
        text-decoration:none;
        border-radius: 20px;
		}

		a:hover
		{
			color: ; #778899;
			background-color: LightPink;
		}
		h1
		{
			font-size: 100px;
			color :Coral;
			text-align:center;
			font-variant: small-caps;

		}

		

		

	</style>
	

</head>

<body>

	<div id ="wrapper"> 



    <a href = "logout.php">Logout</a>
    <a href = "addbook.php">Add Book</a>
    <a href = "mybook.php">My Bookshelf</a>
    <a href = "home.php" style="border-radius: 60px;">HOME</a>


    <form action = "displaybook.php" method = "GET">

    	
    	<input type = "text" name = "search" value = "search books by title here and add to shelf..." size="35">
    	<input type = "submit" name = "submit" value = "search" >



    </form>

</div>

<h1>BookShelf</h1>
<img src="images/pic.gif" alf = "shelf" width= "200">



 </body>


 </html>






<?php

}

else
{
	echo "you are not logged in";
}


?>