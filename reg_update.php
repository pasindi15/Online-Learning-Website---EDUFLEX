<?php

require 'config.php';  

$studfname = $_POST["first_name"];
$studlname = $_POST["last_name"];
$studemail = $_POST["email"];
$studc_code = $_POST["country_code"];
$studcontact = $_POST["contact"];
$studnewpsw = $_POST["new_password"];
$studconpsw = $_POST["confirm_password"];
$studcountry = $_POST["country"];
$studbirth = $_POST["birth"];
$studgender = $_POST["gender"];

if (empty($studfname) || empty($studlname) || empty($studemail) || empty($studc_code) || empty($studcontact) || empty($studnewpsw) || empty($studconpsw) || empty($studcountry) || empty($studbirth) || empty($studgender))
 {
    echo "All fields are required!";
 }
 else {
   
    $result = $con->query("SELECT * FROM registertion WHERE email='$studemail'");

    if ($result->num_rows > 0) 
    {
        
        $sql = "UPDATE registertion SET fname='$studfname', lname='$studlname', country_code='$studc_code', contact='$studcontact', npassword='$studnewpsw', confirmpw='$studconpsw', country='$studcountry', birth='$studbirth', gender='$studgender' WHERE email='$studemail'";

        if ($con->query($sql) === TRUE) {
            echo "<script>
            var userResponse = confirm('Record Updated successfully. Do you want to be redirected to the home page?');
            if (userResponse) {
                window.location.href = 'adminhome.php'; 
            } else {
                window.location.href = 'reg_updateDB.php'; 
            }
        </script>";
    } 
    else {
        echo "<script>
                        alert ('Record not Updated!');
                    </script>";
    }
}

 }
?>
