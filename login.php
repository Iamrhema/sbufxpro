<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFXP/login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="assets/css/loginStyle.css" rel="stylesheet"  type="text/css">
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
            <div class="login-form">
                <form action="./assets/includes/login.inc.php" method="post">
                <?php
                 if(isset($_GET['error'])) {
                    if($_GET['error'] == "wrongpwd"){
                        echo '<p class ="invalid">Wrong Password, Please Re-enter!<p>';
                    }

                    else if ($_GET['error'] == "nouser"){
                        echo '<p class ="invalid">User does not exist!<p>';
                }
                else if ($_GET['error'] == "emptyfields"){
                    echo '<p class ="invalid">Fill in all Fields!<p>';
            }
            }
                ?>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="mailuid" class="form-control" placeholder="Username/Email..">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="pwd" placeholder="Password...">
                    </div>
                    <button type="submit" name="login-submit" class="btn btn-black">Login</button>
                    <input type="button" class = "btn btn-secondary" value="Register" onclick="location.href = 'signup.php'" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>