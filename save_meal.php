<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);
$user_id = $data['user_id'];
$name = $conn->real_escape_string($data['name']);
$ingredients = $conn->real_escape_string($data['ingredients']);
$instructions = $conn->real_escape_string($data['instructions']);
$meal_date = $conn->real_escape_string($data['meal_date']);

$conn->query("INSERT INTO meals (user_id, name, ingredients, instructions, meal_date)
              VALUES ($user_id, '$name', '$ingredients', '$instructions', '$meal_date')");

echo json_encode(["success" => true]);
?>
