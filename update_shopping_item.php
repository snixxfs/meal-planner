<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];
$completed = (int)$data['completed'];

$conn->query("UPDATE shopping_list SET completed = $completed WHERE id = $id");

echo json_encode(["success" => true]);
?>
