<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "tstrickler", "vai4Chai", "tstrickler");
    if ($mysqli->connect_errno) {
        printf("Failed to connect: %s\n", $mysqli->connect_error);
        exit();
    }
    echo "<h1>Posts Made by {$_POST['user_id']}</h1>";
    $query = "SELECT content FROM Posts WHERE author_id='" . $_POST["user_id"] . "'";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_assoc()) {
        echo "{$row['content']}<br><br>";
    }
    $result->free();
    $mysqli->close();
?>
