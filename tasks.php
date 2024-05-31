<?php
include 'config.php';

function createTask($name, $description) {
    global $conn;
    $name = $conn->real_escape_string($name);
    $description = $conn->real_escape_string($description);
    $sql = "INSERT INTO tasks (task_name, task_description) VALUES ('$name', '$description')";
    return $conn->query($sql);
}

function readTasks() {
    global $conn;
    $sql = "SELECT * FROM tasks";
    $result = $conn->query($sql);
    $tasks = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
    }
    return $tasks;
}

function updateTaskStatus($id, $status) {
    global $conn;
    $id = (int)$id;
    $status = (int)$status;
    $sql = "UPDATE tasks SET task_status=$status WHERE id=$id";
    return $conn->query($sql);
}

function deleteTask($id) {
    global $conn;
    $id = (int)$id;
    $sql = "DELETE FROM tasks WHERE id=$id";
    return $conn->query($sql);
}
?>

