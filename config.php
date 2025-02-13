<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_operations";

$conn = mysqli_connect($servername, $username, $password, $dbname, port: "3307");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
