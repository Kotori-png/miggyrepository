<?php
include 'tasks.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_name = $_POST['task_name'];
    $task_description = $_POST['task_description'];

    createTask($task_name, $task_description);
    header("Location: index.php");
}
?>
