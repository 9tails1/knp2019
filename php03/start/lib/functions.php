<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function getPets($limit)
{
    $configVars = require_once 'config.php';
    $pdo = new PDO($configVars['database_connection'],$configVars['username'],$configVars['password']);
    $query = 'Select * from pet ';
    if($limit != 0) {
        $query .= 'LIMIT '.$limit;
        $result = $pdo->query($query);
    }
    $result = $pdo->query($query);
    $pets = $result->fetchAll();

    /*$petsJson = file_get_contents('data/pets.json');
    $pets = json_decode($petsJson, true);*/

    return $pets;
}

function savePets($petsToSave)
{
    $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
    file_put_contents('data/pets.json', $json);
}
