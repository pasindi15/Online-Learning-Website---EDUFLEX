<?php
    $con = new mysqli("localhost","root","","eduflexdb");

    if($con->connect_error)
    {
        die("Connection failed".$con->connect_error);
    }
?>