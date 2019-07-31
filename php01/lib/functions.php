<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getPets() {
    $petJson = file_get_contents('data/pets.json');
    $pets = json_decode($petJson, true);

    return $pets;
}