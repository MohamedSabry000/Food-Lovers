<?php
	if (!empty($_POST) and $_SERVER['REQUEST_METHOD'] =='POST')
		{
		
            require"database_connection.php";
            
            if(($_POST['fname'] != null) and
               ($_POST['lname'] != null) and
               ($_POST['email'] != null) and
               ($_POST['tel'] != null) and
               ($_POST['street_number'] != null) and
               ($_POST['street_name'] != null) and
               ($_POST['city'] != null) and
               ($_POST['country'] != null) and
               ($_POST['postcode'] != null)){
                
                $firstname = addslashes(strip_tags(trim($_POST['fname'])));
                $lastname = addslashes(strip_tags(trim($_POST['lname'])));
                $email = addslashes(strip_tags(trim($_POST['email'])));             $validateEmail = filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL);
                $tel = addslashes(strip_tags(trim($_POST['tel'])));                 
                $street_number = addslashes(strip_tags(trim($_POST['street_number'])));   $validateStreet_number = filter_var(($_POST['street_number']) , FILTER_VALIDATE_INT);
                $street_name = addslashes(strip_tags(trim($_POST['street_name'])));
                $city = addslashes(strip_tags(trim($_POST['city'])));
                $country = addslashes(strip_tags(trim($_POST['country'])));
                $postcode = addslashes(strip_tags(trim($_POST['postcode'])));
				$order_ids = addslashes($_POST['order_ids']);
				$total_price = addslashes($_POST['total_price']);
                
                if($validateEmail == $email and $validateStreet_number == $street_number){
                    $stmt = $conn->prepare( "INSERT INTO user(fname , lname , telephone , str_number , str_name , city  ,country , post_code , email , order_ids , total_price ) VALUES
                                           ( '$firstname' , '$lastname' , '$tel' ,'$street_number' ,'$street_name' ,'$city' , '$country' , '$postcode' , '$email' , '$order_ids' , '$total_price' )");
                    $stmt->execute();
                    
                    
                    /************************order sql ***************************************/
                    
                    /************************end order sql ***********************************/
                    
                    header("Location: index.php");
                    
                }else{
                    echo"SORRY , THERE IS AN UNVALIDATE INPUTS 2 <br />";
                    echo"<a href='index.php' style='text-decoration:none' > RETRY NOW </a>";
                }
                
                
            }else{
                echo"SORRY , THERE IS AN UNVALIDATE INPUTS 1 <br />";
                echo"<a href='index.php' style='text-decoration:none' > RETRY NOW </a>";
            }
        }
        ?>