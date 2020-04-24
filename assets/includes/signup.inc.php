<?php

// checking if user entered the signup page by pressing signup button
if(isset($_POST['signup-submit'])){

    require "dbh.inc.php";

    // fetch all the information user inputs in signup page 
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    // if the user inputed in all fields
    if(empty($username) || empty($username) || empty($password) || empty($passwordRepeat)){
        header("Location: ../.././signup.php?error=emptyfields&uid=".$username."&mail=".$email);
         exit();
    }

      // check invalid username and email
      else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../.././signup.php?error=invalidmail&uid");
        exit();
    }
    // if invalid email
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../.././signup.php?error=invalidmail&uid=".$username);
        exit();
    }
    // check valid username
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../.././signup.php?error=invaliduidmail=".$email);
        exit();
    }
    // if both passords dont match  
    else if($password !== $passwordRepeat){
        header("Location: ../.././signup.php?error=passwordcheck&uid".$username."&mail".$email);
        exit();

    }
    // if user signups with username that alredy exits 
    else{
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../.././signup.php?error=sqlerror");
            exit();
        }

        // if there are no errors in the username
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            // if the user name exits
            mysqli_stmt_store_result($stmt);
            $reslutCheck = mysqli_stmt_num_rows($stmt);
            if ($reslutCheck > 0){
                header("Location: ../.././signup.php?error=usernametake&mail=".$email);
                exit();
            }
            else{
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUser) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../.././signup.php?error=sqlerror");
                    exit();
                }
                else{
                    // hash password
                    $hasedpwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hasedpwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../.././login.php?signup=success");
                    exit();
             
                    
                }
            }

        } 

    }
    // close the connection and functions
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
// send the user back homw without accessing throgh sign up button
else{
    header("Location: ../.././signup.php");
    exit();
}