<?php

include "db.php";

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if ($id === false || $id === null) {
    die("Invalid task ID.");
}

$stmt = $conn->prepare(
    "UPDATE tasks SET status = 'pending' WHERE id = ?"
);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("i", $id);

if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
}

header("Location: index.php");
exit;