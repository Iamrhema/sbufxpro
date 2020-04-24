<?php

// databse paramters 
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "sbufxprologin";

// conncetion variables
$conn = mysqli_connect( $servername, $dBUsername, $dBPassword, $dBName );

// check if the connection disconnects and diplay error message 
if(!$conn){
    die("connection failure: ".mysqli_connect_error());
}