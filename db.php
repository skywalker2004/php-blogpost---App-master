<?php 
$servername = "localhost";
$username = "dayblogger";
$password = "";
$dbname = "dayblogger";

// create a connection => mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("ERROR CONNECTING TO DB ". $conn->connect_error);
}