<?php
include 'db.php';

$user_id = $_GET['user_id'];
$result = $conn->query("SELECT * FROM meals WHERE user_id = $user_id ORDER BY meal_date DESC");

$meals = [];
while ($row = $result->fetch_assoc()) {
    $meals[] = $row;
}

echo json_encode($meals);
?>
