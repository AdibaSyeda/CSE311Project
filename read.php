<?php 

include ("connect.php");


$email =$_SESSION['email'];
$isbn =$_SESSION['isbn'];
$shelf = "";
$review ="";
$start_date ="";
$finished_date ="";

if(isset($_REQUEST['submit']))
{
    $shelf = $_GET['shelf'];
    $review = $_GET['review'];
    $start_date = $_GET['start_date'];
    $finished_date = $_GET['finished_date'];

    $shelfQuery = "INSERT INTO bookshelf(email,isbn,shelf,review,start_date,finished_date) VALUES('$email','$isbn','$shelf','$review','$start_date','$finished_date')";

    if(mysqli_query($conn,$shelfQuery))
    {
    	echo "Added toc" .$shelf. " successfully";
    }
}



?>




<!DOCTYPE HTML>
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
	    #container
	    {
	    	background-color: beige;
	    	margin-top: 0 px auto;
	    	margin-top: 20px;
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
	<div id = "container">
	
	<form action =""; method="GET">

		<?php 

        echo $_SESSION['title'];



         ?>

        <br><br>

		<label> Bookshelves: </label>
		<input type = "radio" name = "shelf" value = "read"> Read
		<input type = "radio" name = "shelf" value = "currently reading"> Currently reading
		<input type = "radio" name = "shelf" value = "want to read"> Want to read <br> <br>

        <label>What did you think?</label> <br>
		<textarea name = "review" rows = "16" cols = "100">Enter your review..</textarea> <br><br>

		<label>Dates read: </label> <br><br>
		<label>Date started:</label>
		<input type="date" name="start_date">

		<label>Date finished:</label>
		<input type="date" name="finished_date"><br><br>

		<input type = "submit" name = "submit" value = "save">


	</form>
</div>



</body>
</html>



