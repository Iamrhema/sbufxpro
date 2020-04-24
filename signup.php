<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFXP/register</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href = "assets/css/loginStyle.css" rel="stylesheet">
    <link rel="icon" href="./assets/images/iconBox.ico" type="image/x-icon" />
    <!------ Include the above in your HEAD tag ---------->

</head>

<body>
    <div class="sidenav">
    <div class="login-main-text">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
            <img class="img" src = "assets/images/fxlogo.png" alt = "Company Logo">
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="register-form">
                <form action="./assets/includes/signup.inc.php" method="post">
                <?php
                if(isset($_GET['error'])) {
                    if($_GET['error'] == "emptyfields"){
                        echo '<p class ="invalid">Fill in all Fields!<p>';
                    }
                    else if($_GET['error'] == "invaliduidmail"){
                        echo '<p class ="invalid" >Invalid UserName and e-mail!<p>';
                    }
                    else if($_GET['error'] == "usernametake"){
                        echo '<p class ="invalid" >User Name Already Taken!<p>';
                    }
                    else if($_GET['error'] == "invalidmail"){
                        echo '<p class ="invalid" >Invalid e-mail!<p>';
                    }
                    else if($_GET['error'] == "passwordcheck"){
                        echo '<p class ="invalid" >Your Passwords Do not match!<p>';
                    }
                    else if($_GET['error'] == "invaliduid"){
                        echo '<p class ="invalid" >Invalid UserName!<p>';
                    }

                }
                ?>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="uid" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="mail" class="form-control" placeholder="Email..">
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" name="pwd" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <label>Repeat Password</label>
                        <input type="password" class="form-control" name="pwd-repeat" placeholder="Repeat Password">
                    </div>
                    <button type="submit"  name ="signup-submit" class="btn btn-secondary">Register</button>
                    <input type="button" class="btn btn-black" value="Login" onclick="location.href = 'login.php'" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>