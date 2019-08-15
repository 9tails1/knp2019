<?php


class ShipLoader
{

    public function getShips(): array
    {
        $shipsData = $this->queryForShips();
        $ships = [];

        foreach ($shipsData as $shipData) {
            $ship = new Ship($shipData['name']);
            $ship->setWeaponPower($shipData['weapon_power']);
            $ship->setJediFactor($shipData['jedi_factor']);
            $ship->setStrength($shipData['strength']);

            $ships[] = $ship;
        }

        return $ships;
    }

    private function queryForShips(): array
    {
        $pdo = new PDO('mysql:host=localhost;dbname=' . 'oo_battle', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('Select * from ship');
        $statement->execute();
        $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $shipsArray;
    }
}