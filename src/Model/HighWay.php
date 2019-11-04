<?php

namespace App;

abstract class HighWay
{
    private $currentVehicles = [];
    private $nbLane;
    private $maxSpeed;

    public function getCurrentVehicle(): array
    
    {
        return $this->currentVehicle;
    }

    public function setCurrentVehicle(array $currentVehicleSentByUser): void
    {
            $this->currentVehicle = $currentVehicleSentByUser;
    }
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLaneSentByUser): void
    {
            $this->nbLane = $nbLaneSentByUser;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeedSentByUser): void
    {
            $this->maxSpeed = $maxSpeedSentByUser;
    }

    

}