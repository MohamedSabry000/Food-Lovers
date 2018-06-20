<html>

    <head>
        <title>Log in</title>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/rest.css">
        <style>
            .headertop {
                padding :10px;
                overflow:hidden;
                width: 44%;
                float:right;
                }
            
            .headertop ul
            {
                font-size: 20px;
                list-style-type:none;
                color:#fff;
                text-align: center;
            }
            .headertop ul li {
                display:inline-block;
                padding:10px;
                border-radius: 10px;
                }
            .headertop ul li:hover {
                color:#FFF;
                cursor:pointer;
                transition: all 0.5s ease-in-out;
                transform: translateY(4px);
                }
        </style>
    </head>
    <body>
        <!---->
        <header id="loginheader">
            <div id="logo">
                Food <span id="logocolor">Lovers</span>
                <div class="headertop">
                    <ul >
                        <li><a href="index.php" style="text-decoration: none; font-weight: bold; color:white;">Home</a></li>
                        <li><a href="rest.php" style="text-decoration: none; font-weight: bold; color:white;">About Restaurant</a></li>
                        <li><a href="about fonders.php" style="text-decoration: none; font-weight: bold; color:white;">Team</a></li>
                        <li><a href="contact.php" style="text-decoration: none; font-weight: bold; color:white;">Contact</a></li>
                        <li>
                            <i class="fa fa-user"></i>
                            <li><a href="login.php" style="text-decoration: none; font-weight: bold; color:white;">Log in</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <section id="loginsection">
            <form action="ensure_from_login.php" method="post">
                <label>username</label><input name="username" type="text" required><br><br><br><br>
                <label>password</label><input name="pass" type="password" required><br><br>
                <input type="submit" id="login" value="login">
            </form>
        </section>
        <section id="loginimg"></section>
        <footer id="footer2">
           <span style="color:black"> www</span>.FoodLover<span style="color:black">.com</span>
        </footer>
    </body>

</html>