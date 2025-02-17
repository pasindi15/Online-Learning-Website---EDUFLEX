<?php

require 'Config.php';


$id = $_POST["id"];


$sql = "DELETE FROM lecturelogin WHERE id = '$id'";

if($con->query($sql))
{
    echo "
    <script>
        var userResponse = confirm('Record deleted successfully. Do you want to be redirected to the home page?');
        if (userResponse) {
            window.location.href = 'adminhome.php'; 
        } else {
            window.location.href = 'teacherDelete.php'; 
        }
    </script>";

}


else 
{
    echo "<script>
        alert('Delete Unsucsesfull');
        </script>";
}

$con->close();

?> 