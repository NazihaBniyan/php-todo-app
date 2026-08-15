<?php

include "db.php";

$id = $_GET["id"];

$result = $conn->query("SELECT * FROM tasks WHERE id = $id");

$task = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>

<body>

    <h1>Edit Task</h1>

    <form action="update.php" method="POST">

        <input 
            type="hidden" 
            name="id" 
            value="<?php echo $task["id"]; ?>"
        >

        <input 
            type="text" 
            name="title" 
            value="<?php echo htmlspecialchars($task["title"]); ?>"
            required
        >

        <button type="submit">Update Task</button>

    </form>

</body>
</html>