<?php
require"database_connection.php";

if(@($_POST['i_meal_name'] != null) and
           @($_POST['i_meal_cat'] != null) and
           @($_POST['i_meal_res'] != null) and
           @($_POST['i_meal_prise'] != null) and
           @($_POST['i_about_meal'] != null) )
{
    
    $mealName = addslashes(strip_tags(trim($_POST['i_meal_name'])));
    //$pic_src = 
    $mealCat = addslashes(strip_tags(trim($_POST['i_meal_cat'])));
    $mealRes = addslashes(strip_tags(trim($_POST['i_meal_res'])));
    $mealPrice = filter_var($_POST['i_meal_prise'] , FILTER_SANITIZE_NUMBER_FLOAT);
    $aboutMeal = addslashes(strip_tags(trim($_POST['i_about_meal'])));
    
    
    
    
    
    
    $target_dir = "images/" . $mealCat . "/";
    
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
    
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
         
            /*****************************************************************************************************/
        
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                
                    $target_file = addslashes($target_file);
                    $stmt = $conn->prepare( "INSERT INTO list_food(food_name , pic_src ,food_catigory , food_restaurant , food_prise ,about_food ) VALUES (? , ? , ? , ? , ? , ? )");
                    $stmt->bind_param("ssssis" , $mealName, $target_file , $mealCat , $mealRes, $mealPrice , $aboutMeal);
                    
                    
                    $stmt->execute();
                    header("Location: restaurant_content.php");
            }else {
                echo "Sorry, there was an error uploading your file.";
            }       
            /*****************************************************************************************************/       
    }
    
}
?>