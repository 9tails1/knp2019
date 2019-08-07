<?php

class Ship
{
    private $name;

    private $weaponPower = 0;

    private $jediFactor = 0;

    private $strength = 0;

    private $underRepair;

    public function sayHello()
    {
        echo "Hello";
    }

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    public function isFunctional(): bool
    {
        return !$this->underRepair;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs(bool $useShortFormat = false)
    {
        if ($useShortFormat) {
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

    public function printShipSummary(Ship $someShip)
    {
        $someShip->sayHello();
        echo "<hr>";
        echo $someShip->getName();
        echo "<hr>";
        echo "Ship Name: " . $someShip->name;
        echo "<hr>";
        echo $someShip->getNameAndSpecs();
    }

    public function doesGivenShipHaveMoreStrength($ship)
    {
        return $ship->strength > $this->strength;
    }

    public function setStrength(int $strength)
    {
        $this->strength = $strength;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function getWeaponPower(): int
    {
        return $this->weaponPower;
    }

    public function setWeaponPower(int $weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    public function getJediFactor(): int
    {
        return $this->jediFactor;
    }

    public function setJediFactor(int $jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }


}