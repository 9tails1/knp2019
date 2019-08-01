<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



function getPDO () {
    $configVars = require_once 'config.php';
    $pdo = new PDO($configVars['database_connection'],$configVars['username'],$configVars['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
function getPets($limit = null)
{
    $pdo = getPDO();
    $query = 'Select * from pet ';
    if($limit) {
        $query .= 'LIMIT :resultLimit';
    }

    $result = $pdo->prepare($query);
    $result->bindParam('resultLimit',$limit, PDO::PARAM_INT);
    $result->execute();

    $pets = $result->fetchAll();

    return $pets;
}

function getPet($id) {
    $pdo = getPDO();
    $query = 'Select * from pet where id = :idVal' ;
    $result = $pdo->prepare($query);
    $result->bindParam('idVal',$id);
    $result->execute();

    $pet = $result->fetch();

    return $pet;
}

function savePets($petsToSave)
{
    $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
    file_put_contents('data/pets.json', $json);
}
