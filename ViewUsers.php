<?php
    echo "<html>";
    echo "<head>";
    echo "<title>View Users</title>";
    echo "</head>";
    echo "<body>";
    echo "<h1>View Users</h1>";
    $mysqli = new mysqli("mysql.eecs.ku.edu", "tstrickler", "vai4Chai", "tstrickler");
    if ($mysqli->connect_errno) {
        printf("Failed to connect: %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "SELECT user_id FROM Users ORDER BY user_id";

    if ($result = $mysqli->query($query)) {
        while($row = $result->fetch_assoc()) {
            echo $row["user_id"] . "<br>";
        }
        $result->free();
    }

    $mysqli->close();

    echo "</body>";
    echo "</html>";
?>
