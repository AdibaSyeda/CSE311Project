<?php

    $conn = mysqli_connect("localhost","root","","bookshelf");

    if(!$conn)
         {
         	die("Connection failed: " .mysqli_connect_error());
    
         }

         
     session_start();


?>