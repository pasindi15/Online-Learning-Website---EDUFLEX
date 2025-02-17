<?php
    require 'config.php';

    
    $id = $_POST["id"];

    $sql = "DELETE FROM supportdb WHERE id = '$id'   ";

    if($con->query($sql))
    {
        echo "<script>
    var userResponse = confirm('Record deleted successfully! Do you want to redirect to the home page?');

    if (userResponse) {
        window.location.href = 'adminhome.php';
    } else {
        window.location.href = 'update.php';
    }
</script>";

    }

    else 
    {
        echo "<script>
                alert ('Record not deleted!');
            </script>";
    }

    $con->close();
?>