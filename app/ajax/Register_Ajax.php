<?php
include_once __DIR__ . "/../Controller/Register_Conrroller.php";

if($_SERVER['REQUEST_METHOD'] === 'POST') {    
    $controller = new Register_Conrroller();
    $response = $controller->register($_POST); 
}
?>