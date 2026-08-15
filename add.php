<?php

include "db.php";

$title = trim($_POST["title"] ?? "");

if ($title === "") {
    die("Task title cannot be empty.");
}

$stmt = $conn->prepare(
    "INSERT INTO tasks (title) VALUES (?)"
);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("s", $title);

if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
}

header("Location: index.php");
exit;