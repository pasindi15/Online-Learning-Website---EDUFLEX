<?php
    require 'config.php';

    $id = $_POST["id"];
    $sstatus = $_POST["status"];

    if(  empty ($id) || empty ($sstatus))
    {
        echo "All Required";
    }

    else 
    {
        $sql = "UPDATE supportdb set  status = '$sstatus' WHERE id = '$id'";

        if($con->query($sql))
        {
            echo "<script>
    var userResponse = confirm('Record updated successfully! Do you want to redirect to the home page?');

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
    alert('Record not deleted!');
</script>";

        }
    }
    $con->close();
?>