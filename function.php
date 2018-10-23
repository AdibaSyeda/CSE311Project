<?php
    
    function email_exist($email,$conn)

    {
        $result = mysqli_query($conn,"SELECT id FROM user WHERE email = '$email'");

        if(mysqli_num_rows($result) == 1)

            return true;
        else
        	return false;
    }

    	function logged_in()
	{
			if(isset($_SESSION['email']))
			{
				return true;
			}
			else
			{
				return false;
			}
	}





?>
