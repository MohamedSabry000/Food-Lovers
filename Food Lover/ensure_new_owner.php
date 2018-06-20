<?php
	if (!empty($_POST) and $_SERVER['REQUEST_METHOD'] =='POST')
		{
		
            require"database_connection.php";
            
            if(($_POST['username'] != null) and
               ($_POST['pass'] != null) and
               ($_POST['newpass'] != null) and
               ($_POST['email'] != null) and
               ($_POST['tel'] != null)){
                
                $name = addslashes(strip_tags(trim($_POST['username'])));
                $email = addslashes(strip_tags(trim($_POST['email'])));             $validateEmail = filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL);
                $tel = addslashes(strip_tags(trim($_POST['tel'])));                 
                $pass = addslashes(strip_tags(trim($_POST['pass'])));
                $newpass = addslashes(strip_tags(trim($_POST['newpass'])));
                
                if($validateEmail == $email and $pass == $newpass){
        
					$stmt = $conn->prepare( "INSERT INTO owner(name , password ,telephone , email ) VALUES (? , ? , ? , ? )");
					$stmt->bind_param("ssss" , $name, $pass , $tel , $email );
                
                    $stmt->execute();
             echo"HI2";
                    header("Location: login.php");
                    
                }else{
                    echo"SORRY , THERE IS AN UNVALIDATE INPUTS  <br /> The Website Guss That You are not The Owner";
                    echo"<a href='login.php' style='text-decoration:none' > RETRY NOW </a>";
                }
                
                
            }else{
                echo"SORRY , THERE IS AN UNVALIDATE INPUTS <br />";
                echo"<a href='form.php' style='text-decoration:none' > RETRY NOW </a>";
            }
        }
        ?>