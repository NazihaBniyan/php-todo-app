<?php

include "db.php";

$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>My Todo List</h1>

    <form action="add.php" method="POST">

        <input 
            type="text" 
            name="title" 
            placeholder="Enter a task"
            required
        >

        <button type="submit">Add Task</button>

    </form>

    <h2>Tasks</h2>

    <?php while ($task = $result->fetch_assoc()) { ?>

   <div class="task">

    <span>
        <?php echo htmlspecialchars($task["title"]); ?>
    </span>

    <div class="actions">

        <a href="edit.php?id=<?php echo $task["id"]; ?>">
            Edit
        </a>

        <a 
    href="delete.php?id=<?php echo $task["id"]; ?>"
    onclick="return confirm('Are you sure you want to delete this task?');"
>
    Delete
</a>

    </div>

</div>

<?php } ?>

</body>
</html>