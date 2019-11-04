<?php

namespace App;

final class PedestrianWay extends HighWay
{
    private $nbLane = 1;
    private $maxSpeed = 10;

    public function addVehicle ($vehicleSentByUser)
    {
        if 
        (
            $vehicleSentByUser instanceof Bicycle || /* || = Bicycle OU Skateboard*/
            $vehicleSentByUser instanceof Skateboard
        )
        {
        $this->currentVehicles[] = $vehicleSentByUser;
        }
    }
}