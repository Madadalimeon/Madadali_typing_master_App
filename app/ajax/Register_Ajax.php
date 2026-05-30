<?php
include_once __DIR__ . "/../Controller/Register_Conrroller.php";
include_once __DIR__ . "/../View/error.php";

if($_SERVER['REQUEST_METHOD'] === 'POST') {    
    $controller = new Register_Conrroller();
    $response = $controller->register($_POST);
    $message = is_numeric($response) ? getErrorMessage((int) $response) : (string) $response;

    header('Content-Type: application/json');
    echo json_encode([
        'code' => $response,
        'message' => $message
    ]);
}
?>
