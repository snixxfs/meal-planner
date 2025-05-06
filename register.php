<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);
$username = $conn->real_escape_string($data['username']);
$password = password_hash($data['password'], PASSWORD_DEFAULT);

$result = $conn->query("SELECT * FROM users WHERE username = '$username'");
if ($result->num_rows > 0) {
    echo json_encode(["success" => false, "message" => "Username already exists."]);
} else {
    $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    echo json_encode(["success" => true]);
}
?>
