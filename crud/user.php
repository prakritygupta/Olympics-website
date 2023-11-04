<?php
include "connect.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO details(name,email,password) VALUES('{$name}','{$email}','{$password}')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted succesfully";
        header('location:Olympics.php#signin');
    } else {
        die(mysqli_error($con));

    }
}
?>
