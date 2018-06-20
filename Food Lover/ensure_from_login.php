<?php
	if (!empty($_POST) and $_SERVER['REQUEST_METHOD'] =='POST')
		{
		
            require"database_connection.php";
            
            if(($_POST['username'] != null) and ($_POST['pass'] != null)){
                
                $username = addslashes(strip_tags(trim($_POST['username'])));
                $password = addslashes(strip_tags(trim($_POST['pass'])));
                
                $sql = "SELECT * FROM owner WHERE name = '$username' AND password = '$password' ";
                $result = $conn->query($sql) ;
                $numrows = $result->num_rows;
                if($numrows > 0)
                   {
                    header("Location: restaurant_content.php");
                   }else{
                        echo"SORRY , YOUR PASSWORD IS NOT AGREE WITH YOUR NAME <br />";
                        echo"<a href='login.php' style='text-decoration:none' > RETRY NOW </a>";
                    }
                
            }else{
                echo"SORRY , YOUR PASSWORD IS NOT AGREE WITH YOUR NAME <br />";
                echo"<a href='index.php' style='text-decoration:none' > RETRY NOW </a>";
            }
        }
        ?>