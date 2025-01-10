<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
    if (isset($_POST['showbtn'])) {
        include 'config.php';
        $sid = $_POST['sid'];
        $sql = "SELECT * FROM students WHERE id = {$sid}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful: " . mysqli_error($conn));

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
    ?>
                <form class="post-form" action="updatedata.php" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="hidden" name="sid" value="<?php echo $row['id']; ?>" />
                        <input type="text" name="sname" value="<?php echo $row['name']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="saddress" value="<?php echo $row['address']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Class</label>
                        <select name="sclass">
                            <option value="" selected disabled>Select Class</option>
                            <option value="1" <?php if ($row['class'] == 1) echo 'selected'; ?>>BCA</option>
                            <option value="2" <?php if ($row['class'] == 2) echo 'selected'; ?>>BSC</option>
                            <option value="3" <?php if ($row['class'] == 3) echo 'selected'; ?>>B.TECH</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="sphone" value="<?php echo $row['phone']; ?>" />
                    </div>
                    <input class="submit" type="submit" value="Update" />
                </form>
    <?php
            }
        } else {
            echo "<p>No Record Found for ID: {$sid}</p>";
        }
    }
    ?>
</div>
</div>
</body>
</html>