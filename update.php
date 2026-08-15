<?php

include "db.php";

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$title = trim($_POST["title"] ?? "");

if ($id === false || $id === null) {
    die("Invalid task ID.");
}

if ($title === "") {
    die("Task title cannot be empty.");
}

$stmt = $conn->prepare(
    "UPDATE tasks SET title = ? WHERE id = ?"
);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("si", $title, $id);

if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
}

header("Location: index.php");
exit;