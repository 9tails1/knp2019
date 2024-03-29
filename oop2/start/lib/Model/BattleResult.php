<?php

class BattleResult
{
    private $usedJediPowers;

    private $winningShip;

    private $losingShip;

    public function __construct(bool $usedJediPowers, Ship $winningShip = null, Ship $losingShip = null)
    {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    public function wereJediPowersUsed(): bool
    {
        return $this->usedJediPowers;
    }

    public function getWinningShip(): ?Ship
    {
        return $this->winningShip;
    }

    public function getLosingShip(): ?Ship
    {
        return $this->losingShip;
    }

    public function isThereAWinner(): bool
    {
        return $this->getWinningShip() !== null;
    }
}