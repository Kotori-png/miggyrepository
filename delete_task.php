<?php
include 'tasks.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    deleteTask($id);
    header("Location: index.php");
}
?>

