<?php

require 'config.php';

$name = $_POST["name"];
$id = $_POST["id"];
$email = $_POST["email"];
$password = $_POST["pw"];

if(empty($name)||empty($id)||empty($email)||empty($password))
{
    echo "All required";
}
else
{
    $sql = "UPDATE adminlogin SET name='$name',id ='$id',email='$email',password='$password' WHERE id = '$id' ";

    if($con->query($sql))
    {
        echo "<script>
        var userResponse = confirm('Record Updated successfully. Do you want to be redirected to the home page?');
        if (userResponse) {
            window.location.href = 'adminUpdate.php'; 
        } else {
            window.location.href = 'adminDelete.php'; 
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