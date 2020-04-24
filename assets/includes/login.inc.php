<?php
if(isset($_POST["login-submit"])) {

require "dbh.inc.php";
$mailuid = $_POST["mailuid"];
$password = $_POST["pwd"];

// if fiels empty while loging in 
if(empty($mailuid) || empty($password)){
    header("Location: ../.././login.php?error=emptyfields");
    exit();
    }
    // check user name exists and if pwd matches with pwd in database
    else{
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        // runn conncetion to databse
        $stmt = mysqli_stmt_init($conn);
        // check errors in database
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../.././login.php?error=sqlerror");
            exit();
        } 

        else {
            // pass user paramters int database
             mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
             mysqli_stmt_execute($stmt);
            $result= mysqli_stmt_get_result($stmt);
            // if the reslut is empty
            if($row = mysqli_fetch_assoc($result)){
                // get password from user inout if same as on in database
                $pwdcheck = password_verify($password, $row["pwdUser"]);
                // if the password does not match
                if($pwdcheck == false){
                    header("Location: ../.././login.php?error=wrongpwd");
                    exit();
                }
                // if the password matches
                else if($pwdcheck == true){
                    session_start();
                    $_SESSION["userId"] =  $row["uidUsers"];
                    $_SESSION["userUid"] =  $row["uidUsers"];

                    header("Location: ../.././index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../.././login.php?error=wrongpwd");
                    exit();
                } 
            }
            // no matching username or email in database
            else{
                header("Location: ../.././login.php?error=nouser");
                exit();
            }
        }

    }

}

else{
    header("Location: ../.././index.php");
    exit();
}