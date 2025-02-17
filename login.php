<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags for proper character encoding and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tab icon -->
    <link rel="icon" href="images/logo1.jpg">

    <!-- Page title -->
    <title>Edu Flex</title>

    <!-- CSS links -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login2.css">
    
    <!--js links-->
    <script src="js/index.js"></script>
    <script type="text/javascript" src="js/search1.js"></script>
    


    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM registertion WHERE email='$email' AND npassword='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['username'] = $row['fname'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='index.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home2.php");
                }
              }else{

            
            ?>


<!-- Navigation Bar -->
<nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="home.php"><img src="images/logo1.png" alt="EduFlex Logo" width="150px"></a>
            </div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="program.php">Programs</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
            <div class="search-container">
            <input type="text" id="search-query" placeholder="Search">
            <button class="search-btn" onclick="performSearch()">Search</button>
</div>
            
           <a href="login.php"> <button class="log-out">Login</button></a>
        </div>
    </nav>
    <br>

<!--End of the Navigation Bar-->


        <article class="form-container">
                <header class="form-header">
                    <h2>Login</h2>
                </header>
   
                <form action="" method="POST">
    
                   <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" autocomplete="off" required>
                    </div>

                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" autocomplete="off" required>
                    </div>

                    
                    <div class="form-group">
                        <input type="submit" class="btn" name="submit" value="Login">
                    </div>

                    
                    <div class="form-links">
                        <p>Don't have an account? <a href="registrationDB.php">Sign Up Now</a></p>
                    </div>

                    <a href="forgotpassword.php">Frogot Password</a>
                    <div class="form-extra-links">
                        <a href="adminLoging.php">Admin Login</a>
                        <a href="teacherLogin.php">Lecture Login</a>
                    </div>
                </form>
            </article>
        <?php } ?>
      </div>

    <!--Footer-->
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

<!--End of the footer-->

</body>
</html>