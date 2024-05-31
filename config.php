<?php
$servername = "localhost";
$username = "if0_36359415";
$password = "bLpi23eM9mK";
$database = "if0_36359415_Finals";
$hostname = "sql304.infinityfree.com";

$conn = new mysqli($servername, $username, $password, $database, $hostname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
