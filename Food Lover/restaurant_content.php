<?php
	if($_SERVER['REQUEST_METHOD'] !='GET'){
		header("Location: index.php");
	}
	if (!empty($_GET)){
		
		require"database_connection.php";
						// addslashes(string) to skip special chars
						//strip_tags(string) to delete tags in string
						//trim(string) delete first spaces, left spaces , \n , etc...
			
		if(@($_GET['d_meal_name'] != null) ){
			$stmt = $conn->prepare( "DELETE FROM list_food WHERE food_name = ? ");
			$stmt->bind_param("s" , $mealName );
			
			$mealName = addslashes(strip_tags(trim($_GET['d_meal_name'])));
			
			$stmt->execute();
		}
		if(@($_GET['m_meal_name'] != null) and @($_GET['m_new_meal_name'] != null) ){
			$stmt = $conn->prepare( "UPDATE list_food SET food_name = ? WHERE food_name = ?");
			$stmt->bind_param("ss" , $newMealName , $mealName);
			
			$newMealName = addslashes(strip_tags(trim($_GET['m_new_meal_name'])));
			$mealName = addslashes(strip_tags(trim($_GET['m_meal_name'] )));
			
			$stmt->execute();
		}
		if(@($_GET['p_meal_name'] != null) and @($_GET['p_meal_prise'] != null) ){
			$stmt = $conn->prepare( "UPDATE list_food SET food_prise = ? WHERE food_name = ?");
			$stmt->bind_param("ss" , $mealPrice , $mealName );
			
			$mealPrice = filter_var($_GET['P_meal_prise'] , FILTER_SANITIZE_NUMBER_FLOAT);
			$mealName = addslashes(strip_tags(trim($_GET['p_meal_name'] )));
			
			$stmt->execute();
		}
		
	}
		
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title>Resturant</title>
		<link rel="stylesheet" href="css/resturant.css">
		<link rel="stylesheet" href="css/save.css">
		<link rel="stylesheet" href="css/restaurant_content.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
    </head>
	<body>
		<!--Start Header -->
			<?php require"header.php" ?>
		<!--End Header -->
		<!--Start Content -->
		<div class="search_area">
			<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="ctrl_panel" >
					<a href="show_all_orders.php" style="color: #6F3030; font-size: 20px; float: right; text-decoration: none; margin-right: 6%;background-color: #CCC;padding: 10px;border-radius: 20px;margin-top: 5px;">Show Orders</a>
					<input type="button" value="insert" onclick=insert_meal();>
					<input type="button" value="Delete" onclick=delete_meal();>
					<input type="button" value="Modify Name" onclick=modify_name();>
					<input type="button" value="Modify Price" onclick=modify_prise();>
					<input type="button" value="Reset" onclick=reset();>
				</div>
				<a href="form.php" style="float: right; text-decoration: none; margin-right: 3%;background-color: #CCC;padding: 10px;border-radius: 20px;margin-top: 5px;">Add New Owner</a>
				<input type="text" name="search" style="width: 30%;">
				<input type="submit" value="Search" style="width: 10%; ">
			</form>
			<hr style="margin-top: 10px; margin-bottom: 10px;">
		</div>
		<div class="table_area">
			<table id="table_content" >
				<tr>
					<th>ID</th>
					<th>Picture</th>
					<th>Name</th>
					<th>Catigory</th>
					<th>Restaurant</th>
					<th>price</th>
					<!--<th>Order Status<th>
					<th>Payment<th>-->
					<th>About Meal</th>
				</tr>
				<?php
				
					if(@($_GET['search'] != null)){
						$search_content = $_GET['search'];
						$sql = "SELECT * FROM list_food where food_name like '".addslashes(strip_tags(trim($search_content)))."%'" ;
						$result = $conn->query($sql);
						if($result->num_rows >0){
							while($row = $result->fetch_assoc() ){
								echo"<tr>";
								echo "<td> " . stripslashes($row['id']) . " </td>"  ;
								echo "<td> " . "<img src=\" ". stripslashes($row['pic_src']) . "\" width=\"100px\" height=\"100px\" alt=\"can't find the pic\" ></td> ";
								echo "<td> " . stripslashes($row['food_name']) . " </td> ";
								echo "<td> " . stripslashes($row['food_catigory']) . " </td> ";
								echo "<td> " . stripslashes($row['food_restaurant']) . " </td> ";			//stripslashes(string) return the scaped chars before
								echo "<td> " . stripslashes($row['food_prise']) . " $ " . "</td>";
								echo "<td> " . stripslashes($row['about_food']) . "</td>";
								echo"</tr>";
							}
						}
					}
				?>
			</table>
			<div id="insert_content" style="display: none;" >
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<input type="text" name="i_meal_name" placeholder="Name" required><br />
					<input type="file" name="fileToUpload" id="fileToUpload" required><br />
					<select name="i_meal_cat">
						<option value="breakfast">Breakfast</option>
						<option value="entree">Entree</option>
						<option value="salads">Salads</option>
						<option value="rice">Rice</option>
						<option value="pasta">Pasta</option>
						<option value="pizza">Pizza</option>
						<option value="desserts">Desserts</option>
						<option value="drinks">Drinks</option>
					</select>
					<input type="text" name="i_meal_cat" placeholder="Catigory" required><br />
					<input type="text" name="i_meal_res" placeholder="Meal Restaurant" required><br />
					<input type="number" name="i_meal_prise" placeholder="Meal Prise" required><br />
					<input type="text" name="i_about_meal" placeholder="About Meal" required><br />
					<input type="submit" name ="submit" value="Done" style="line-height: 50px; border-radius: 10px; width: 13%;">
				</form>
				
			</div>
			<div id="delete_content" style="display: none;" >
				<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="text" name="d_meal_name" placeholder="Name"><br />
					<input type="submit" value="Done" style="line-height: 50px; border-radius: 10px; width: 13%;">
				</form>
			</div>
			<div id="modify_name_content" style="display: none;">
				<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="text" name="m_meal_name" placeholder="Name"><br />
					<input type="text" name="m_new_meal_name" placeholder="New Name"><br />
					<input type="submit" value="Done" style="line-height: 50px; border-radius: 10px; width: 13%;">
				</form>
			</div>
			<div id="modify_prise_content" style="display: none;" >
				<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="text" name="p_meal_name" placeholder="Name"><br />
					<input type="number" name="p_meal_prise" placeholder="New Meal Prise"><br />
					<input type="submit" value="Done" style="line-height: 50px; border-radius: 10px; width: 13%;">
				</form>
			</div>
		</div>
		
		<!--End Content -->
		<!--Start Footer-->
		<?php require"footer.php" ?>
		<!--End Footer-->
		<script src="js/restaurant_content.js"></script>
	</body>
</html>

<?php
	if(!empty($_GET)){
		$conn->close();
	}
?>