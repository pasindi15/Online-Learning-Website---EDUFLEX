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
         <!--link the css file with the program css-->
         <link rel="stylesheet" href="css/modules.css">
        <!--font awesome link for the header is obtained from cdnjs.com site. then type font awesome. them copy the htl code inside </>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="about us/aboutus.js" defer></script>
        <script type="text/javascript" src="js/search1.js"></script>

    </head>
    <body>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="home2.php"><img src="images/logo1.png" alt="EduFlex Logo" width="150px"></a>
            </div>
            <ul>
                <li><a href="home2.php">Home</a></li>
                <li><a href="aboutus2.php">About Us</a></li>
                <li><a href="program.php">Programs</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
            <div class="search-container">
            <input type="text" id="search-query" placeholder="Search">
            <button class="search-btn" onclick="performSearch()">Search</button>
</div>
<a href="edit.php?Id=$res_id" class="profile-link">Profile</a>
           <a href="logout.php?Id=$res_id"> <button class="log-out">Log Out</button></a>
        </div>
    </nav>
        <div class="bodyitems">
            <p></p>


        </div>
		<h1 id="mod" align="center">Module Page-Course in Coding and Computational Thinking(IT1040)</h1>
        
        
		<div class="module-container">
  <div class="module">
    <h2>1.Introduction to Coding and Computational Thinking</h2>
    <p>In this module, we will lay the foundation for your journey into the world of coding and computational thinking.</p>


<div style="display: flex; align-items: center;">
<img src="images/mod.webp" alt="Lecturer" style="width: 50px; margin-right: 10px;">
    <p>Lecturer: Dr. S.R. Fernando</p>
    <a href="4.1.php" class="view-button" style="margin-left: auto;">View</a>
</div>   
   
  </div>
  
  <div class="module">
    <h2>2.Coding Projects and Problem-Solving</h2>
    <p>In this module, you will embark on exciting coding projects and learn how to apply your knowledge to solve real-world challenges.

</p>
<div style="display: flex; align-items: center;">
<img src="images/mod.webp" alt="Lecturer" style="width: 50px; margin-right: 10px;">
    <p>Lecturer: Dr. ranjith Fernando</p>
    <a href="4.2.php" class="view-button" style="margin-left: auto;">View</a>
</div>   
 </div>
</div>


    <!-- Footer Section -->
    <footer>
    <div class="footer-container">
        <div class="contact-info">
            <ul>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="term&con2.php">Terms and Conditions</a></li>
                <li><a href="privacy2.php">Privacy Policy</a></li>
                <li><a href="faq2.php">FAQ</a></li>
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