<!DOCTYPE html>
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
        <!--link the css file with the contact css-->
        <link rel="stylesheet" href="css/contacts.css">
        <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside </>-->
        <script type="text/javascript" src="js/search1.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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



        <div class="content">
        <h2 style=text-align:center;padding-top:30px;>Contact us</h2>

            <div class="details">
                <div class="contacts">
                    <div class="info">
                        <b>Hotline</b>
                        
                        <div class="detail">
                            <div class="icon">
                                <a href="tel:0112345678"><i class="fa-solid fa-phone-volume"></i></a>
                            </div>

                            <div class="num">
                                <a href="tel:0112345678">011 234 5678</a>
                            </div >
                        </div>
                    </div>

                    <br/>

                    <div class="info">
                        <b>Email</b>
                        
                        <div class="detail">
                            <div class="icon">
                                <a href="mailto:eduflex@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                            </div>

                            <div class="email">
                                <a href="mailto:eduflex@gmail.com">eduflex@gmail.com</a>
                            </div >
                        </div>
                    </div>

                    <br/>

                    <div class="info">
                        <b>Address</b>
                        
                        <div class="detail">
                            <div class="icon">
                                <a href="https://www.google.com/maps/search/?api=1&query=26%2F1%2C+Aberathne+Road%2C+Colombo+04" target="_blank"><i class="fa-solid fa-location-dot"></i></a>
                            </div>
                            
                            <div class="address">
                                <a href="https://www.google.com/maps/search/?api=1&query=26%2F1%2C+Aberathne+Road%2C+Colombo+04" target="_blank">26/1, Aberathne Road, Colombo 04</a>
                            </div >
                        </div>
                    </div>
                </div>

                <div class="form">
                    <fieldset>
                        <form action="supportAddDatabase.php" method="post">
                            <div class="query">
                                <div class="query1">
                                    First Name
                                    <input type="text" pattern="[A-Za-z]+" name="fname" required><br/><br/>
                                    Last Name
                                    <input type="text" pattern="[A-Za-z]+" name="lname" required><br/><br/>
                                    Contact number
                                    <input type="tel" pattern="[0-9]{10}" name="number" required><br/><br/>
                                    Email
                                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" name="email" required><br/><br/>
                                </div>
                            
                            
                                <div class="message">
                                    Message
                                    <textarea name="message" placeholder="Your message"></textarea>
                                    <br/>
                                    <br/>
                                    <div class="btn">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>

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