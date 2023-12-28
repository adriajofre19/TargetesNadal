<?php

function ctrlAdminPanel($request, $response, $container){

    $taskModel = $container->users();
    
    $users = $taskModel->getAllUsers();

    $response->set("users", $users);
    

    $response->setTemplate("adminpanel.php");

    return $response;    
}