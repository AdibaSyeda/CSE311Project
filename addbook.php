<?php

include("connect.php");


   $isbn = "";




    
    if(isset($_POST['submit'])) 
    {
    	$isbn = $_POST['isbn'];
    	$title = $_POST['title'];
    	$author = $_POST['author'];
    	$rating = $_POST['rating'];
    	$genre = $_POST['genre'];
    	$language = $_POST['language'];
    	$total_page = $_POST['total_page'];
    	$summary = $_POST['summary'];


    $bookQuery = "INSERT INTO book(isbn,title,author,rating,genre,language,total_page,summary) VALUES('$isbn','$title','$author','$rating','$genre','$language','$total_page','$summary')";
    if(mysqli_query($conn,$bookQuery))
    	echo "book inserted successfully";


    	
    }
    
    	

    	


    


        
    






?>










<!DOCTYPE HTML>
<html>

<head>
	

    <title>ADD BOOK</title>
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

	


        table,tr,td
       {

            border: 2px solid #BA55D3;
            padding: 5px;
            margin:0px auto;
            margin-top: 100px;
            margin-left: 400px;

            
            
       }

       td
       {
       	background-color: #DDA0DD;
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


	 <form method="POST" action = "">
    <table>
    	



    	<tr>

    		<td style = "background-color: #FFFAF0;">ENTER ISBN :</td>
    		<td> <input type="text" name="isbn" size="48"> </td>


    	</tr>

    	<tr>
            <td style = "background-color: #FFFAF0;"> ENTER TITLE :</td>
            <td> <input type="text" name="title" size="48"> </td>
       </tr>

       <tr>
            <td style = "background-color: #FFFAF0;"> ENTER AUTHOR :</td>
            <td> <input type="text" name="author" size="48"> </td>
       </tr>

       <tr>
            <td style = "background-color: #FFFAF0;"> ENTER RATING :</td>
            <td> <input type="text" name="rating" size="48"> </td>
       </tr>

       <tr>
            <td style = "background-color: #FFFAF0;"> ENTER GENRE :</td>
            <td> <input type="text" name="genre" size="48"> </td>
       </tr>

       <tr>
            <td style = "background-color: #FFFAF0;"> ENTER LANGUAGE :</td>
            <td> <input type="text" name="language" size="48"> </td>
       </tr>

       <tr>
            <td style = "background-color: #FFFAF0;"> ENTER TOTALPAGE :</td>
            <td> <input type="text" name="total_page" size="48"> </td>
       </tr>

            <td style = "background-color: #FFFAF0;">SUMMARY : </td>
            <td><textarea name = "summary" rows = "4" cols = "50">enter text here..</textarea>

        <tr>
       
            <td></td>
            <td>
                 <input type="submit" name = "submit" value="Add book"/>
                 <input type="reset" value="Reset">
            </td>
        </tr>


    </table>

    </form>





</body>

    




</html>


