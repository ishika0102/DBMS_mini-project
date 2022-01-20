<?php

$login = false;
    $con = mysqli_connect("localhost","root","","pet_adapt");
    if(!$con)
    {
         //echo "success"; 
        die("Erroor" . mysqli_connect_error());
    }
?>