<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "tstrickler", "vai4Chai", "tstrickler");
    if ($mysqli->connect_errno) {
        printf("Failed to connect: %s\n", $mysqli->connect_error);
        exit();
    }

    echo "<select>";
    $query = "SELECT author_id FROM Posts ORDER BY author_id";
    while ($row = $mysqli->query($query)->fetch_assoc()) {
        echo "<option value='{$row[user_id]}'>{$row[user_id]}</option>";
    }
    echo "</select>";
?>
