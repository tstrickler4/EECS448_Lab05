<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $mysqli = new mysqli("mysql.eecs.ku.edu", "tstrickler", "vai4Chai", "tstrickler");
    if ($mysqli->connect_errno) {
        printf("Failed to connect: %s\n", $mysqli->connect_error);
        exit();
    }

    $message = "alert('Selected posts deleted successfully.');";

    if (count($_POST) <= 1) {
        $message = "alert('No messages selected.');";
    }
    else {
        foreach ($_POST as $key => $value) {
            if ($key == "submit") {
                continue;
            }
            $query = "DELETE FROM Posts WHERE post_id='{$key}'";
            if (!$mysqli->query($query)) {
                $message = "alert('Failed to delete one or more posts.');";
            }
        }
    }

    $mysqli->close();

    echo "<script type='text/javascript'>";
    echo $message;
    if (isset($_POST["submit"])) {
        echo "window.parent.location.reload(true);";
    }
    echo "</script>";
?>
