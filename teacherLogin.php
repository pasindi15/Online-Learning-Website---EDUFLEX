



<html>
    <head>
        <!--to specify the character encoding of the document-->
        <meta charset="UTF-8">
        <!--to match the the device's width and set initial zoom level to 1.0-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--enter the logo as icon on the tab-->
        <link rel="icon" href="images/logo1.png">
        <!--name of the tab-->
        <title>Edu Flex</title>
        <!--link the css file with the header css-->
        <link rel="stylesheet" href="css/header.css">
        <!--link the css file with the footer css-->
        <link rel="stylesheet" href="css/footer.css">
         <!--link the css file with the program css-->
         <link rel="stylesheet" href="css/AdminLoging.css">
         <script type="text/javascript" src="js/search1.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="js/login.js" defer></script>
        
    </head>
    <body>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="home2.php"><img src="images/logo1.png" alt="EduFlex Logo" width="150px"></a>
            </div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="programb.php">Programs</a></li>
                <li><a href="contactb.php">Contact us</a></li>
            </ul>
            <div class="search-container">
            <input type="text" id="search-query" placeholder="Search">
            <button class="search-btn" onclick="performSearch()">Search</button>
</div>
            
           <a href="login.php"> <button class="log-out">Login</button></a>
        </div>
    </nav>
        <div class="image">
        <div class="wrapper">
                <a href="home.php"><span class="icon-close"><ion-icon name="close"></ion-icon>
                </span></a>
                

                <div class="form-box login">
                    <h2>Lectures Login</h2>
                    <form method="post" action="teacherLoginRead.php">
                    <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="pw" required>
                        <label>password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">
                        Remember me</label>
                        <a href="detail">Forgot Password?"</a>

                    </div>
                    <button type="submit" class="find" >Login </button>
                
                    
                    
                    
                    

                </div>
                </form>
            </div>
        </div>
    </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        </body>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 <!-- Footer Section -->
 <footer>
    <div class="footer-container">
        <div class="contact-info">
            <ul>
                <li><a href="contactb.php">Contact us</a></li>
                <li><a href="term&con.php">Terms and Conditions</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
            <p>
                <a href="mailto:eduflex@gmail.com">eduflex@gmail.com</a> |
                <a href="tel:+011xxxxxxx">011-xxxxxxx</a>
            </p>
            <div class="social-icons">
                <a href="#"><img style="width:20px" src="images/fb-icon.png"  alt="Facebook"></a>
                <a href="#"><img style="width:20px" src="images/linkedin-icon.jpg" alt="LinkedIn"></a>
                <a href="#"><img style="width:20px" src="images/youtube-icon.png" alt="YouTube"></a>
                <a href="#"><img style="width:20px" src="images/email-icon.jpg" alt="Email"></a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p><b>&copy; 2024 EduFlex. All rights reserved.</b></p>
    </div>
</footer>
</body>

</html>