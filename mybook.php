<?php

  include("connect.php");




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

		h3
		{
			color :DarkRed;


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
	table,th,td
	{
       border:2px solid #191970;
       padding:2px;
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
	



	<table>
		<h3>READ:</h3>


		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Shelf</th>
			<th>Review</th>
			<th>Start date</th>
			<th>Finished date</th>


		</tr>

		<?php 
		$user_email = $_SESSION['email'];
		
		    $query = "SELECT b.title,b.author,s.shelf,s.review,s.start_date,s.finished_date from bookshelf s
		     inner join book b 
		     on s.isbn = b.isbn 
		     where s.shelf = 'read'
		     AND  
		     s.email = '$user_email'";

		      

		    $result = mysqli_query($conn,$query);
		    
		    if(mysqli_num_rows($result)>0)
		    {
		    	while($row=mysqli_fetch_assoc($result))
		    	{
		    		?>

		    		<tr>
			            <td><?php echo $row['title']; ?> </td>
			            <td><?php echo $row['author']; ?> </td>
			            <td><?php echo $row['shelf']; ?> </td>
			            <td><?php echo $row['review']; ?> </td>
			            <td><?php echo $row['start_date']; ?> </td>
			            <td><?php echo $row['finished_date']; ?> </td>
		           </tr>

		    		<?php
		    	}


		    }


		 ?>

		

	</table>
	<br>
	<br>

	<table>
		<h3>WANT TO READ:</h3>

		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Shelf</th>
			<th>Review</th>
			<th>Start date</th>
			<th>Finished date</th>


		</tr>

		<?php 
		$user_email = $_SESSION['email'];
		
		    $query = "SELECT b.title,b.author,s.shelf,s.review,s.start_date,s.finished_date from bookshelf s
		     inner join book b 
		     on s.isbn = b.isbn 
		     where s.shelf = 'want to read'
		     AND  
		     s.email = '$user_email'";

		      

		    $result = mysqli_query($conn,$query);
		    
		    if(mysqli_num_rows($result)>0)
		    {
		    	while($row=mysqli_fetch_assoc($result))
		    	{
		    		?>

		    		<tr>
			            <td><?php echo $row['title']; ?> </td>
			            <td><?php echo $row['author']; ?> </td>
			            <td><?php echo $row['shelf']; ?> </td>
			            <td><?php echo $row['review']; ?> </td>
			            <td><?php echo $row['start_date']; ?> </td>
			            <td><?php echo $row['finished_date']; ?> </td>
		           </tr>

		    		<?php
		    	}


		    }


		 ?>

		

	</table>
	<br>
	<br>

	<table>
		<h3>CURRENTLY READING:</h3>

		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Shelf</th>
			<th>Review</th>
			<th>Start date</th>
			<th>Finished date</th>


		</tr>

		<?php 
		$user_email = $_SESSION['email'];
		
		    $query = "SELECT b.title,b.author,s.shelf,s.review,s.start_date,s.finished_date from bookshelf s
		     inner join book b 
		     on s.isbn = b.isbn 
		     where s.shelf = 'currently reading'
		     AND  
		     s.email = '$user_email'";

		      

		    $result = mysqli_query($conn,$query);
		    
		    if(mysqli_num_rows($result)>0)
		    {
		    	while($row=mysqli_fetch_assoc($result))
		    	{
		    		?>

		    		<tr>
			            <td><?php echo $row['title']; ?> </td>
			            <td><?php echo $row['author']; ?> </td>
			            <td><?php echo $row['shelf']; ?> </td>
			            <td><?php echo $row['review']; ?> </td>
			            <td><?php echo $row['start_date']; ?> </td>
			            <td><?php echo $row['finished_date']; ?> </td>
		           </tr>

		    		<?php
		    	}


		    }


		 ?>

		

	</table>
</body>

</html>