<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "tstrickler", "vai4Chai", "tstrickler");
    if ($mysqli->connect_errno) {
        printf("Failed to connect: %s\n", $mysqli->connect_error);
        exit();
    }

    $fail = FALSE;

    foreach ($_POST as $key) {
        $query = "DELETE FROM Posts WHERE post_id='" . $key . "'";
        if (!$mysqli->query($query)) {
            $fail = TRUE;
        }
    }

    echo "<script type='text/javascript'>";

    if ($fail) {
        echo "alert('Failed to delete one or more posts.')";
    }
    else {
        echo "alert('Selected posts deleted successfully.')";
    }

    echo "</script>";

    $mysqli->close();
?>
