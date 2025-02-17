<?php

require 'config.php';

$name = $_POST["name"];

$email = $_POST["email"];
$password = $_POST["pw"];

$sql = "INSERT INTO adminlogin VALUES('','$name','$email','$password')";

if($con->query($sql))
{
    echo "<script>
        var userResponse = confirm('Record Added successfully. Do you want to be redirected to the home page?');
        if (userResponse) {
            window.location.href = 'adminhome.php'; 
        } else {
            window.location.href = 'adminadd.php'; 
        }
    </script>";
}
else
{
    echo "error".$con->error;

}

$con->close();

?> 