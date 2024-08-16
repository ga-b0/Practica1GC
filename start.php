<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos = file_get_contents('php://input');
    $datos = json_decode($datos, true);

    $result = ['success' => false];  
    if (isset($datos['email']) && isset($datos['password'])) {
        $email = $datos['email'];
        $password = $datos['password'];
        $result['password'] = $password;
        $result['email'] = $email;
        $result['success'] = true; 
    }
    header('Content-Type: application/json');
    echo json_encode($result);
    exit;
}

?>