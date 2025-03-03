<?php
include "config.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM cons1 WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID specified for deletion.";
}

$conn->close();
?>
