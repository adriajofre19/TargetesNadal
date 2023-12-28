<?php

function ctrlValidar($request, $response, $container){

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $token = $_POST['token'];

    $taskModel = $container->users();
    
    $users = $taskModel->getUserByToken($token);

    if ($users) {
        echo "ok";
        
    } else {
        echo "Token no vàlid.";
    }
    return $response;
}
}
