<?php
require 'config.php';

$cid=$_POST["id"];
$statu_s=$_POST["status"];



if (isset($_POST["status"]) && !empty($_POST["status"])) {
    $cid = $_POST["id"];
    $update = $_POST["status"];
    $modify = "UPDATE payments SET status = '$update' where id=$cid"; 

    
    if ($con->query($modify)) {
        echo "<script>
        alert('Updated.');
        window.location.href = 'adminhome.php'; 
    </script>";
    
    } else {
        echo "<script>
    alert('Not Update!');
    window.location.href = 'paymentstatus.php'; 
</script>";

    }
} else {
    echo "Pending";
}
?>

