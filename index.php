<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>TODO List</h1>
    
        <div class="border">
    <form action="add_task.php" method="post">
        <input type="text" name="task_name" placeholder="Task Name" required> <br>
        <textarea name="task_description" placeholder="Task Description"></textarea> <br>
        <button type="submit">Add Task</button>
    </form>
</div>

    <h2>Tasks:</h2>
    <div class="box">
    <ul>
        <?php
        include 'tasks.php';
        $tasks = readTasks();
        foreach ($tasks as $task) {
            echo "<li>{$task['task_name']} - {$task['task_description']} - Created: {$task['date_created']} <a href='delete_task.php?id={$task['id']}'>Delete</a></li>";
        }
        ?>
    </ul>
    </div>
</body>
</html>
