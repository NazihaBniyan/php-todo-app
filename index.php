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

   <div class="task <?php echo $task["status"]; ?>">

    <div>
        <span>
            <?php echo htmlspecialchars($task["title"]); ?>
        </span>

        <strong>
            (<?php echo htmlspecialchars($task["status"]); ?>)
        </strong>
    </div>

    <div class="actions">

        <a href="edit.php?id=<?php echo $task["id"]; ?>">
            Edit
        </a>
        <?php if ($task["status"] === "pending") { ?>

    <a href="complete.php?id=<?php echo $task["id"]; ?>">
        Complete
    </a>

<?php } else { ?>

    <a href="pending.php?id=<?php echo $task["id"]; ?>">
        Mark as Pending
    </a>

<?php } ?>
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