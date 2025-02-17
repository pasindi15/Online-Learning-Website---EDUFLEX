<?php

require 'config.php';

$email = $_POST["email"];
$npw = $_POST["pwd"];
$cpw = $_POST["cpwd"];




if(empty($email)||empty($npw)||empty($cpw))
{
    echo "All required";
}
else
{
    $sql = "UPDATE registertion SET npassword='$npw',confirmpw ='$cpw' WHERE email = '$email' ";

    if($con->query($sql))
    {
        echo "<script>
        var userResponse = confirm('Record Updated successfully. Do you want to be redirected to the home page?');
        if (userResponse) {
            window.location.href = 'login.php'; 
        } else {
            window.location.href = 'frogotpassword.php'; 
        }
    </script>";

    }
    else 
    {
        echo "<script>
        alert('Update Unsucsesfull');
        </script>";
    }
}

$con->close();

?> 