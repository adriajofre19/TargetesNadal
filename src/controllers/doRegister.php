<?php

session_start();

function ctrlDoRegister($request, $response, $container){

    $taskModel = $container->users();
    $nom = $request->get(INPUT_POST, "nom");
    $cognoms = $request->get(INPUT_POST, "cognoms");
    $data_naix = $request->get(INPUT_POST, "data_naix");
    $adreca = $request->get(INPUT_POST, "adreca");
    $grup = $request->get(INPUT_POST, "grup");

    // genera un token aleatori
    $token = bin2hex(random_bytes(32));
    

    $taskModel->addUser($nom,$cognoms,$data_naix,$adreca, $grup, $token);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $cognoms = $_POST["cognoms"];
    $data_naix = $_POST["data_naix"];
        $adreca = $_POST["adreca"];
        $grup = $_POST["grup"];

    if ($_FILES["targeta"]["error"] === UPLOAD_ERR_OK) {
        $nombreFoto = "targeta_" . $nom . $cognoms;
        $rutaDestino = "targetes/" . $nombreFoto;

        move_uploaded_file($_FILES["targeta"]["tmp_name"], $rutaDestino);
            
    } 

    echo "
            <div class='modal-body' style=' display: flex; flex-direction: column; flex-wrap: nowrap; justify-content: flex-end; align-items: center; align-content: flex-end; '>
                <p><strong>Nom:</strong> $nom</p>
                <p><strong>Cognoms:</strong> $cognoms</p>
                <p><strong>Data de Naixament:</strong> $data_naix</p>
                <p><strong>Adreça:</strong> $adreca</p>
                <p><strong>Grup:</strong> $grup</p>
                <p><strong>Codi de registre: </strong> $token</p>
                <p> *Guarda el token, el necesitaras per fer gestions </p>
                <a href='index.php?r=index'><button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Tornar a l'inici</button></a>
            </div>";
    } 


    return $response;

}