<?php
include 'tasks.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    if ($status == 0) {
        $status = 1;
    } else {
        $status = 0;
    }

    updateTaskStatus($id, $status);
    header("Location: index.php");
}
?>
