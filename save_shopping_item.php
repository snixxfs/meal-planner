<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);
$user_id = $data['user_id'];
$item_name = $conn->real_escape_string($data['item_name']);
$completed = isset($data['completed']) ? (int)$data['completed'] : 0;

$conn->query("INSERT INTO shopping_list (user_id, item_name, completed) VALUES ($user_id, '$item_name', $completed)");

echo json_encode(["success" => true]);
?>
