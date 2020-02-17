<?php

$servername = "localhost";
$username = "BedCor";
$password = "1234Password";
$dbname = "BedCor";

// creating connection

$conn = new mysqli ($servername, $username, $password, $dbname);

// check connection

if ($conn->connect_error)
{
    die("Connection failed; " . $conn->connect_error);
}
?>