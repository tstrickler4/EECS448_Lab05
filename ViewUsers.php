<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "tstrickler", "vai4Chai", "tstrickler");
    if ($mysqli->connect_errno) {
        printf("Failed to connect: %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "SELECT user_id FROM Users ORDER BY user_id";

    if ($result = $mysqli->query($query)) {
        while($row = $result->fetch_assoc()) {
            printf("%s<br>", $row["user_id"]);
        }
        $result->free();
    }

    $mysqli->close();
?>
