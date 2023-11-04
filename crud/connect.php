<?php
    $con=new mysqli('localhost','root','','signin');

    if(!$con){
        die(mysqli_error($con));
        
    }
?>