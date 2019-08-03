<?php

class Ship
{
    public $name;

    public $weaponPower = 0;

    public $jediFactor = 0;

    public $strength = 0;

    public function sayHello()
    {
        echo "Hello";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat = false)
    {
        if($useShortFormat){
            $nameAndSpecs = sprintf('%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            $nameAndSpecs = sprintf('%s:,w:%s,j:%s,s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }

        return $nameAndSpecs;
    }
}

function printShipSummary($someShip)
{
    $someShip->sayHello();
    echo "<hr>";
    echo $someShip->getName();
    echo "<hr>";
    echo "Ship Name: " . $someShip->name;
    echo "<hr>";
    echo $someShip->getNameAndSpecs();
}

$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weaponPower = 10;

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

printShipSummary($myShip);
echo "<p>";
printShipSummary($otherShip);


