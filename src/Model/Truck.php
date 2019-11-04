<?php

namespace App;

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        'diesel',
    ];
    /**
     * @var string
     */
    protected $energy;

    /**
     * @var int
     */
    protected $energyLevel;

        /**
     * @var int
     */
    protected $capacity;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function capacity(): string
    {
        $this->capacity = 0;
        return "Filling !";
    }

    public function filling(): string
    {
        $sentence = "";
        while ($this->capacity < 100) {
            $this->capacity++;
            $sentence .= "In filling ";
        }

        $sentence .= "Full !";
        return $sentence;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        if($capacity >= 0){
            $this->capacity = $capacity;
        }
    }
}