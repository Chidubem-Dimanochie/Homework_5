<?php
header("Access-Control-Allow-Origin: *");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $Hello = [
        ['Hello' => 'Hello Proffesor'],
    ];

    echo json_encode($Hello);  
}
?>