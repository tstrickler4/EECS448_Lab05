<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "tstrickler", "vai4Chai", "tstrickler");
    if ($mysqli->connect_errno) {
        printf("Failed to connect: %s\n", $mysqli->connect_error);
        exit();
    }

    // $query = "SELECT user_id FROM Users WHERE user_id={$_POST["user_id"]}";
    echo "<script type='text/javascript'>";

    $author_id = $_POST["author_id"];
    $content = $_POST["content"];

    $query = "INSERT INTO Posts (content, author_id) VALUES ('{$content}', '{$author_id}')";
    if ($mysqli->query($query)) {
        echo "alert('Post saved successfully.');";
    }
    else {
        echo "alert('Invalid username. Post could not be saved.');";
    }

    echo "</script>";

    $mysqli->close();
?>
