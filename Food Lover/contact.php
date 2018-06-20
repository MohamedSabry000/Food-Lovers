<?php
	
	if (!empty($_POST)){
		
		require"database_connection.php";
		if(@($_POST['fname'] != null) and @($_POST['email'] != null) and @($_POST['telephone'] != null) and @($_POST['message'] != null) ){
			$stmt = $conn->prepare( "INSERT INTO for_us(name , email ,telephone , message ) VALUES (? , ? , ? , ? )");
			$stmt->bind_param("ssss" , $name, $email ,$tel , $msg );
			
			$name = addslashes(strip_tags(trim($_POST['fname'])));
			$email = addslashes(strip_tags(trim($_POST['email'] )));
			$tel = addslashes(strip_tags(trim($_POST['telephone'])));
			$msg = addslashes(strip_tags(trim($_POST['message'])));
			
		
			$stmt->execute();
			header("Location: contact.php");
			
		}
		
	}	
		
?>
<html>

<head>
	<title>Contact Us</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/rest.css">
</head>
    <body>
    <div class="header">
				<div class="headertop">
					<div class="container">
						<div class="name">food <span id="logocolor">lovers</span></div>
						<ul>
							<li><a href="index.php" style="text-decoration: none; font-weight: bold; color:white;">Home</a></li>
							<li><a href="rest.php" style="text-decoration: none; font-weight: bold; color:white;">About Restaurant</a></li>
							<li><a href="about fonders.php" style="text-decoration: none; font-weight: bold; color:white;">Team</a></li>
							<li><a href="contact.php" style="text-decoration: none; font-weight: bold; color:white;">Contact</a></li>
							<li>|</li>
							<li>
								<i class="fa fa-user"></i>
								<li><a href="login.php" style="text-decoration: none; font-weight: bold; color:white;">Log in</a></li>
							</li>
						</ul>
					</div>	
				</div>
				<div class="headercenter">
					<div class="container">
						<p>order food delivery form your</p>
						<p>favorite restaurants</p>
                    
					</div>
				</div>
				<div class="headerbottom">
					<div class="container">
						<ul>
							<li>
								<i class="fa fa-envelope"></i>  
								abdulrhmanosman61@yahoo.com
							</li>
							<li>|</li>
							<li>
								<i class="fa fa-phone"></i> 
								call us : 01019933423
							</li>
							<li>|</li>
							<li>
								<i class="fa fa-clock-o "></i>
								work time from 12 am to 12 pm
							</li>
						</ul>
					</div>	
				</div>
			</div>
        
        <section id="contact">
            <h4>contact us</h4>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form">
              
                <input name="fname" type="text" placeholder="*Name" required>
                
                <input name="email" type="email"  placeholder="*email" required>
                
                <input name="telephone" type="tel" placeholder="*telephone" required>
                
                <textarea name = "message" placeholder="send message" required></textarea>
            
                <input name="send" type="submit">
            </form>
        </section>
        
		<section style="
                        background-color:#080704;
                        text-align:center;
                        margin-top:30px;
                        margin-left:30px;
                        float:left;
                        width: 540px;
                        height: 630px;
                        border-radius:10px
                        ">
            <h1 style="
                       color:#E0140C;
                       font-size:100px;
                       font-family:Arial;
                       padding-top:20px
                       ">
                Let's Contact
            
            </h1>
            
            <p style="color:#fff;
                      line-height:40px;
                      font-size:30px
                      ">Thank you for your interest in Donaldson and our products. Please complete the form below so we can better understand your needs. If you have questions that require immediate attention, please contact us at 952-887-3344.</p>
        </section>
    
    </body>
</html>