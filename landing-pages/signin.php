<?php include'user.php';?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="signincss.css">
</head>

<body
    style="background-image:url('https://img.olympicchannel.com/images/image/private/f_auto/primary/yxoih5teo2g9wlnctecs?w=1920&q=75'); background-size:auto; background-position:left; background-repeat:no-repeat; background-color:black;">
    <div  class="container" style="display:flex; justify-content:flex-end; margin-top:20px;">
    <img src="https://olympics.com/topic-assets/olympic-games-assets/olympic-rings.svg" style="img-align:top; height:50px; widht:50px; display:flex; justify-content:flex-end;">
        <div class="d-flex justify-content-left h-50" >    
            <div class="card">
            <p style="font-size: 50px; margin-top: 100px; padding-left: 0px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-weight:bolder; color: white;">WELCOME TO YOUR OLYMPIC ID</p><br><br>
                <div class="card-header">
                    <h3>Sign In</h3>
                </div>
                <div class="card-body">
                    <form action="user.php" method="post">

                        <div class="form-group">
                            <label style="color:white;">Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" name="name"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label style="color:white;" >Email</label>
                            <input type="email" class="form-control" placeholder="Enter your Email" name="email"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label style="color:white;">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password"
                                name="password" autocomplete="off">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>