<?php

require 'config.php';


$id = $_POST["id"];


$sql = "DELETE FROM adminlogin  WHERE id = '$id'";

if($con->query($sql))
{
    echo "
    <script>
        var userResponse = confirm('Record deleted successfully. Do you want to be redirected to the home page?');
        if (userResponse) {
            window.location.href = 'adminhome.php'; 
        } else {
            window.location.href = 'adminDelete.php'; 
        }
    </script>";

}


else 
{
    echo "Not Deleted!";
}

$con->close();

?> 