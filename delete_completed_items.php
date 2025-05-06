<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);
$user_id = $data['user_id'];

$conn->query("DELETE FROM shopping_list WHERE user_id = $user_id AND completed = 1");

echo json_encode(["success" => true]);
?>

