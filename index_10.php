<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data and decode it as an associative array
    $data = json_decode(file_get_contents("php://input"), true);

    // Check if decoding was successful
    if ($data === null) {
        echo json_encode([
            'message' => 'Error decoding JSON',
            'received_email' => 'Invalid data',
            'received_password' => 'Invalid data'
        ]);
        exit();
    }

    // Send back the data received
    echo json_encode([
        'message' => 'Success',
        'received_email' => $data['email'] ?? 'No email provided',
        'received_password' => $data['password'] ?? 'No password provided'
    ]);
    exit();
}
?>