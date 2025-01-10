<?php
include 'config.php'; // Include the correct database connection file

if(isset($_POST['sname']) && isset($_POST['saddress']) && isset($_POST['class']) && isset($_POST['sphone']))
{
    $sname = $_POST['sname'];
    $saddress = $_POST['saddress'];
    $sclass = $_POST['class'];
    $sphone = $_POST['sphone'];

    // Use the correct column names from your database table
    $sql = "INSERT INTO students (sname, saddress, sclass, sphone) VALUES ('{$sname}', '{$saddress}', '{$sclass}', '{$sphone}')";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful: " . mysqli_error($conn));

    // Redirect to index.php after successful insertion
    header("Location: index.php");
    exit();
}

mysqli_close($conn);
?>