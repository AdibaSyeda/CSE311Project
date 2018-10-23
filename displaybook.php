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

    	
    	table,th,td
    	{
    		border: 2px solid MediumSlateBlue;

    		padding: 5px;
    		border-radius: 5px;

    		margin: 0px auto;
    		margin-top: 100px;

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



<?php


include("connect.php");
include("function.php");


$search = $_REQUEST['search'];

$query = "SELECT title,author,genre,summary,isbn from book where title like '%$search%'";
$result = mysqli_query($conn,$query);


if(mysqli_num_rows($result)>0)
{





     	
          


        
            while($row=mysqli_fetch_assoc($result))
            {
            	$_SESSION['title'] = $row['title'];
            	$_SESSION['isbn'] = $row['isbn'];
            	
            	
                
            
          ?>
          <table>

     		<tr>
            
            <th> Title </th>
            <th> Author </th>
            <th> Genre </th>
            <th> Summary </th>
            <th>         </th>
            </tr>


          
          	<tr>

          		<td>  <?php echo $row['title']; ?> </td>

          		<td>  <?php echo $row['author']; ?>  </td>
          		<td>  <?php echo $row['genre']; ?>  </td>
          		<td>  <?php echo $row['summary']; ?>  </td>
          		<td>  <a href = "read.php" style = "padding:20;color:LightPink;background-color: white;">Add to Shelf</a>





            </tr>

           
            
               
         <?php      
            }
}
else 

{
	echo "No books found in the library by the name $search ";
}

?>
</table>




</body>

</html>