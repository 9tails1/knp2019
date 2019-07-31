<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getPets()
{
    $petsJson = file_get_contents('data/pets.json');
    $pets = json_decode($petsJson, true);

    return $pets;
}

function savePets($petsToSave)
{
    $petsJson = json_encode($petsToSave,JSON_PRETTY_PRINT);
    $success = file_put_contents('data/pets.json', $petsJson);

    return $success;
}

