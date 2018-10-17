<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "tstrickler", "vai4Chai", "tstrickler");
    if ($mysqli->connect_errno) {
        printf("Failed to connect: %s\n", $mysqli->connect_error);
        exit();
    }

    // $query = "SELECT user_id FROM Users WHERE user_id={$_POST["user_id"]}";
    echo "<script type='text/javascript'>";

    $user_id = $_POST["user_id"];
    echo "alert('{$user_id}');";
    $query = "INSERT INTO Users (user_id) VALUES ('{$user_id}')";
    if ($mysqli->query($query)) {
        echo "alert('Username created successfully.');";
    }
    else {
        echo "alert('Username already exists. Failed to create username.');";
    }

    echo "</script>";

    $mysqli->close();
?>
