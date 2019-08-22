<?php


class ShipLoader
{
    private $pdo;

    /**
     * ShipLoader constructor.
     * @param $dbDsn
     * @param $dbUser
     * @param $dbPass
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function getShips(): array
    {
        $shipsData = $this->queryForShips();
        $ships = [];

        foreach ($shipsData as $shipData) {
            $ship = $this->createShip($shipData);
            $ships[] = $ship;
        }


        return $ships;
    }


    public function findOneById($id): Ship
    {
        $pdo = $this->getPDO($this->pdo);   
        $statement = $pdo->prepare('Select * from ship where id = :id');
        $statement->execute(array('id' => $id));
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$shipArray) {
            return null;
        }

        return $this->createShip($shipArray);
    }

    private function createShip(array $shipData): Ship
    {
        $ship = new Ship($shipData['name']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setJediFactor($shipData['jedi_factor']);
        $ship->setStrength($shipData['strength']);
        $ship->setId($shipData['id']);

        return $ship;
    }

    private function queryForShips(): array
    {
        $pdo = $this->getPDO($this->pdo);
        $statement = $pdo->prepare('Select * from ship');
        $statement->execute();
        $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $shipsArray;
    }

    private function getPDO()
    {
        return $this->pdo;
    }
}