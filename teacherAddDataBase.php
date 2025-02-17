<?php

require 'config.php';

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["pw"];

$sql = "INSERT INTO lecturelogin VALUES('$name','','$email','$password')";

if($con->query($sql))
{
    echo "<script>
        var userResponse = confirm('Record Added successfully. Do you want to be redirected to the home page?');
        if (userResponse) {
            window.location.href = 'adminhome.php'; 
        } else {
            window.location.href = 'teacherAdd.php'; 
        }
    </script>";
}
else
{
    echo "<script>
        alert('Adding Unsucsesfull');
        </script>"; 

}

$con->close();

?> 