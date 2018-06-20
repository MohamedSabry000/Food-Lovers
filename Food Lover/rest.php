<html>
    <head>
         <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/rest.css">
        
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery.cycle.all.js"></script>
        <script>
            
            $(function(){
                $('#play').click(function(){
                    $('#slider').cycle('resume');
                });
            });
            
            $(function(){
                $('#pause').click(function(){
                    $('#slider').cycle('pause');
                });
            });
            
            $(function(){
               $('#slider').cycle({
					fx:     'toss',
					next:   '#next',
					prev:   '#prev',
					pager:  '#pager',
					speed:  1000              
				});        
			}); 
        </script>
    </head>
    <body>
		<!--start header -->
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
        <aside class="cmenu1">
            <h2>our cheifs
                <p>(swits)</p>
            </h2>
            <ul>
                <li id="cheif">
                    <img src="images/chiefs&founders/sweets/sweets1.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
				<li id="cheif">
                    <img src="images/chiefs&founders/sweets/sweets2.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
				<li id="cheif">
                    <img src="images/chiefs&founders/sweets/sweets3.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
				<li id="cheif">
                    <img src="images/chiefs&founders/sweets/sweets4.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
				<li id="cheif">
                    <img src="images/chiefs&founders/sweets/sweets5.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
				<li id="cheif">
                    <img src="images/chiefs&founders/sweets/sweets6.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
                
            </ul>
        </aside>
        
        
        <!-- slider to chef -->
       <!-- <section id="showcheifdata">-->
          <!--  <h3 id="show">
                cheif data
            </h3>-->
            
		<div id="wraper">
			<!-- control buttons -->
			<div id="pager"></div>
			<div id="play">
				<i class="fa fa-play-circle-o" aria-hidden="true"></i>
			</div>
			<div id="pause">
				<i class="fa fa-stop-circle" aria-hidden="true"></i>
			</div>
			<div id="next">&#10097;</div>
			<div id="prev">&#10096;</div>
			<!-- end of control buttons -->

			<div id="slider">
				
				<div id="pics">
					<img src="images/chiefs&founders/chef1.jpg">
					<div id="info">
						<h3>this is the first chef</h3>
						<p>
							this chef called magdy mohammed and his carrer begin since 1990 and he is a proffesional chef
						</p>
					</div>
				</div><!-- end of pics -->
				
				<div id="pics">
					<img src="images/chiefs&founders/chef2.jpg">
					<div id="info">
						<h3>this is the first chef</h3>
						<p>
							this chef called magdy mohammed and his carrer begin since 1990 and he is a proffesional chef
						</p>
					</div>
				</div><!-- end of pics -->
				
				<div id="pics">
					<img src="images/chiefs&founders/chef3.jpg">
					<div id="info">
						<h3>this is the first chef</h3>
						<p>
							this chef called magdy mohammed and his carrer begin since 1990 and he is a proffesional chef
						</p>
					</div>
				</div><!-- end of pics -->
				
				<div id="pics">
					<img src="images/chiefs&founders/chef4.jpg">
					<div id="info">
						<h3>this is the first chef</h3>
						<p>
							this chef called magdy mohammed and his carrer begin since 1990 and he is a proffesional chef
						</p>
					</div>
				</div><!-- end of pics -->
				
				<div id="pics">
					<img src="images/chiefs&founders/chef5.jpg">
					<div id="info">
						<h3>this is the first chef</h3>
						<p>
							this chef called magdy mohammed and his carrer begin since 1990 and he is a proffesional chef
						</p>
					</div>
				</div><!-- end of pics -->
				
			</div> <!-- end of slider -->
			
		</div> <!-- end of wraper -->
		<!--</section>-->
        <aside class="cmenu2">
            <h2>our cheifs
                <p>(preheat)</p>
            </h2>
            <ul>
                <li id="cheif">
                    <img src="images/chiefs&founders/preheats/preheat1.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
				<li id="cheif">
                    <img src="images/chiefs&founders/preheats/preheat2.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
				<li id="cheif">
                    <img src="images/chiefs&founders/preheats/preheat3.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
				<li id="cheif">
                    <img src="images/chiefs&founders/preheats/preheat4.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
				<li id="cheif">
                    <img src="images/chiefs&founders/preheats/preheat5.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
				<li id="cheif">
                    <img src="images/chiefs&founders/preheats/preheat6.jpg" id="first">
                    <p id="para">this is the first cheif</p>
                </li>
				
                
            </ul>
        </aside>
		
		<div style="height:249px; width:40%; border:1px solid #fff; float:left; position:relative; background-color:#1B1A1A; margin:0 2.9%; ">
			<ul 
				style="position:absolute; top:50%; left:50%; transform:translate(-48%,-50%); display:flex;">
				<li id="motion">w</li>
				<li id="motion">e</li>
				<li id="motion">l</li>
				<li id="motion">c</li>
				<li id="motion">o</li>
				<li id="motion">m</li>
				<li id="motion">e</li>
			</ul>
		</div>
		
        <div class="section5">
           
                <ul>
                    <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                    <li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                    <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                    <li><i class="fa fa-codepen" aria-hidden="true"></i></li>
                    <li><i class="fa fa-behance" aria-hidden="true"></i></li>
                </ul>
          
          
        </div>
       <!-- <script src="js/rest.js"></script>-->
    </body>


</html>