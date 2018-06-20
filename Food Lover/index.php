<?php require"database_connection.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Resturant</title>
		<link rel="stylesheet" href="css/resturant.css">
		<link rel="stylesheet" href="css/save.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower" >
	</head>
	<body>
		<!--Start Header -->
		<?php require"header.php" ?>
		<!--End Header -->
		<!--Start Content -->
		<div class="content">
			<div class="container">
				<div class="categories" id="c1" >
					<h3>categories</h3>
					<ul>
						<li onclick="showBreakFast();" id="breakfast">breakfast</li>
						<hr>
						<li onclick="showEntree();" id="entree">entree</li>
						<hr>
						<li onclick="showSalads();" id="salads">salads</li>
						<hr>
						<li onclick="showRice();" id="rice">rice</li>
						<hr>
						<li onclick="showPasta();" id="pasta">pasta</li>
						<hr>
						<li onclick="showPizza();" id="pizza">pizza</li>
						<hr>
						<li onclick="showDesserts();" id="desserts">desserts</li>
						<hr>
						<li onclick="showDrinks();" id="drinks">drinks</li>
					</ul>
				</div>
				
				<div class="ourproducts" id="c2" >
					<h3 id="ourproducts">our products</h3>
					<div id="homepage">
						<img style='width:100%' src='images/menu.jpg'>
					</div>
					<div id="health-breakFast" style="display: none;">
						<div style="padding:20px;"><img style="width:100%" src="images/breakfast/breakfast.jpg"></div>
						<?php
							$sql = "SELECT * FROM list_food WHERE food_catigory = 'breakfast' ";
							include"posts.php";
						?>
					</div>
					<div id="health-entree" style="display: none;">
						<div style="padding:20px;"><img style="width:100%" src="images/entree/entree.jpg"></div>
						<?php
							$sql = "SELECT * FROM list_food WHERE food_catigory = 'entree' ";
							include"posts.php";
						?>
					</div>
					<div id="health-salads" style="display: none;">
						<div style="padding:20px;"><img style="width:100%" src="images/salads/salad.png"></div>
						<?php
							$sql = "SELECT * FROM list_food WHERE food_catigory = 'salads' ";
							include"posts.php";
						?>
					</div>
					<div id="health-rice" style="display: none;">
						<div style="padding:20px;"><img style="width:100%" src="images/rice/rice.jpg"></div>
						<?php
							$sql = "SELECT * FROM list_food WHERE food_catigory = 'rice' ";
							include"posts.php";
						?>
					</div>
					<div id="health-pasta" style="display: none;">
						<div style="padding:20px;"><img style="width:100%" src="images/pasta/pasta.png"></div>
						<?php
							$sql = "SELECT * FROM list_food WHERE food_catigory = 'pasta' ";
							include"posts.php";
						?>
					</div>
					<div id="health-pizza" style="display: none;">
						<div style="padding:20px;"><img style="width:100%" src="images/pizza/pizza3.jpg"></div>
						<?php
							$sql = "SELECT * FROM list_food WHERE food_catigory = 'pizza' ";
							include"posts.php";
						?>
					</div>
					<div id="health-desserts" style="display: none;">
						<div style="padding:20px;"><img style="width:100%" src="images/desserts/dessert.jpg"></div>
						<?php
							$sql = "SELECT * FROM list_food WHERE food_catigory = 'desserts' ";
							include"posts.php";
						?>
					</div>
					<div id="health-drinks" style="display: none;">
						<div style="padding:20px;"><img style="width:100%" src="images/drinks/drinks.png"></div>
						<?php
							$sql = "SELECT * FROM list_food WHERE food_catigory = 'drinks' ";
							include"posts.php";
						?>
					</div>
				</div>
				
				<form class="form" method="post" id="c3" style="display: none;" action="ensure_user_connection.php">
					<h3>check out</h3>
					<div class="body">
						<i class="fa fa-user fa-3x"></i><span style="font-size: 30px;font-weight: bold;">contact</span>
						<hr style="margin-top: 10px;">
						<div class="contact">
							<input type="text" placeholder="First Name" name="fname" required>
							<input type="text" placeholder="Last Name" name="lname" required>
							<input type="email" placeholder="Email" name="email" required>
							<input type="tel" placeholder="Telephone" name="tel" required>	
						</div>
						<i class="fa  fa-motorcycle fa-3x"></i><span style="font-size: 30px;font-weight: bold;">ordering method</span>
						<hr style="margin-top: 10px;">
						<div class="contact">
							<input type="number" placeholder="Street Number " style="width: 20%;" name="street_number" required>
							<input type="text" placeholder="Street Name " style="width: 20%;" name="street_name" required>
							<input type="text" placeholder="Town or City Area" style="width: 20%;" name="city" required>
							<input type="text" placeholder="Country" style="width: 20%;" name="country" required>
							<input type="text" placeholder="Postcode" style="width: 95%;" name="postcode" required>
							<input type="hidden" name="order_ids" value="from function" id="user_orders">
							<input type="hidden" name="total_price" value="05" id="total_price">
						</div>
						<input type="submit" value="Save" id="save_data" onclick=send_orders();>
						<input type="button" value="Back" id="back_to_posts" onclick=back_posts(); >
					</div>
				</form>
				<div class="yourorder">
					<h3>your order</h3>
					<table id="order">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Price</th>
						</tr>
					</table>
					<button id="continue" onclick=save_page();>continue</button>
				</div>
			</div>
		</div>
		<!--End Content -->
		<!--Start Footer-->
		<?php require"footer.php" ?>
		<!--End Footer-->
		<script src="js/js.js"></script>
	</body>
</html>
<?php
		$conn->close();
?>