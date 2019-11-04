<?php

namespace App;

final class MotorWay extends HighWay
{
    private $nbLane = 4;
    private $maxSpeed = 130;

    public function addVehicle ($vehicleSentByUser)
    {
        if ($vehicleSentByUser instanceof Car)
        {
        $this->currentVehicles[] = $vehicleSentByUser;
        }
    }
}
