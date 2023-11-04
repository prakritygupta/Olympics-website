<?php
include "connect.php";
$id=$_GET['updateid'];
$sql="SELECT * FROM details WHERE id={$id}";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE details SET id={$id}, name='{$name}', email='{$email}',password='{$password}' WHERE id={$id}";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data Updated succesfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));

    }
}
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title> crud operation </title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off"value=<?php echo $email;?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off"value=<?php echo $password;?>>
            </div>

            <br>
            <button type="submit" class="btn btn-primary" name='submit'>Update</button>
        </form>
    </div>
</body>

</html>