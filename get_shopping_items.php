<?php
include 'db.php';

$user_id = $_GET['user_id'];
$result = $conn->query("SELECT * FROM shopping_list WHERE user_id = $user_id");

$items = [];
while ($row = $result->fetch_assoc()) {
    $items[] = $row;
}

echo json_encode($items);
?>
