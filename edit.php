<?php 
   session_start();

   include("config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/profile.css">
    <!--js links-->
    <script src="js/index.js"></script>
    <script type="text/javascript" src="js/search1.js"></script>
    


    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="right-links">
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


    <br><br>
    <div class="container">
        <div class="box form-box">
            <?php 
               if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $pw = $_POST['password'];
                $cons = $_POST['contact'];
                

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE registertion SET fname='$username', email='$email', npassword='$pw',contact='$cons' WHERE Id=$id ") or die("error occurred");
                if($edit_query){
                    echo "<script>
                    alert('Successful! and  Redircted to the HomePaage');
                    window.location.href = 'home2.php'; 
                    </script>";
                }
                
                
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM registertion WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['fname'];
                    $res_Email = $result['email'];
                    $res_id = $result['Id'];
                    $res_pw = $result['npassword'];
                    $res_con = $result['contact'];
                }

            ?>
            <header>Change Profile</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password:</label>
                    <input type="text" name="password" id="password" value="<?php echo $res_pw; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Contact">Contact:</label>
                    <input type="text" name="contact" id="contact" value="<?php echo $res_con; ?>" autocomplete="off" required>
                </div>

                
                
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
                
            </form>
        </div>
        <?php } ?>
      </div>
      
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