<?php

require_once __DIR__ . '/lib/Ship.php';

$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weaponPower = 10;
$myShip->strength = 100;

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

$myShip->printShipSummary($myShip);
echo "<p>";
$myShip->printShipSummary($otherShip);

$strengthDisplay = $myShip->name . ' has more strength';
if ($myShip->doesGivenShipHaveMoreStrength($otherShip)) {
    $strengthDisplay = $otherShip->name . ' has more strength';
}

echo '<hr>' . $strengthDisplay;

