<?php
include 'config.php'; // Include the correct database connection file

if(isset($_POST['sid']) && !empty($_POST['sid']) && isset($_POST['sname']) && isset($_POST['saddress']) && 
isset($_POST['sclass']) && isset($_POST['sphone']))
{
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $saddress = $_POST['saddress'];
    $sclass = $_POST['sclass'];
    $sphone = $_POST['sphone'];

    $sql = "UPDATE students SET name='{$sname}', address='{$saddress}', class='{$sclass}', phone='{$sphone}' WHERE id={$sid}";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful: " . mysqli_error($conn));

    // Redirect to index.php after successful update
    header("Location: index.php");
    exit();
}

mysqli_close($conn);
?>