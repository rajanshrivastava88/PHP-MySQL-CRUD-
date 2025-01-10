<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

include 'header.php';
include 'config.php';
?>

<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>a
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Rajan Srivastava</td>
                <td>Delhi</td>
                <td>B.Tech</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Shivya Srivastava</td>
                <td>Lucknow</td>
                <td>BCOM</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>Anish</td>
                <td>Bihar</td>
                <td>BSC</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>

            <tr>
                <td>4</td>
                <td>Kishan</td>
                <td>UP</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>

            <tr>
                <td>5</td>
                <td>Mohit</td>
                <td>Delhi</td>
                <td>BA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>

        </tbody>
    </table>
</div>
</div>
</body>
</html>
