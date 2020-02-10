<?php
$servername = "localhost";
$username = "cpc10nylwhfv";
$password = "Ignite@123";
$dbname="dbignite";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>