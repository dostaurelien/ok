<?php


class Bicycle {
    private $color;
    private $currentSpeed;
    public $nbSeats = 1;
    public $nbWheels = 2;
    public $name;


    public function forward() {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

// Function GET/SET CurrentSpeed
    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($newSpeed) {
        if ($newSpeed < 0) {
            return;
        }
        $this->currentSpeed = $newSpeed;
    }

// Function CONSTRUCTOR
    public function __construct(string $color) {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


}


class Car {

    private $nbWheels=4;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;


    public function __construct($color, $nbSeats, $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start() {
        return "Start";
    }

    public function forward() {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // Function GET/SET nbWheels
    public function getNbWheels(): int {
        return $this->nbWheels;
    }

    public function setNbWheels (int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    // Function GET/SET CurrentSpeed
    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void {
        if ($currentSpeed < 0) {
            return;
        }
        $this->currentSpeed = $currentSpeed;
    }

    // Function GET/SET Color
    public function getColor(): int {
        return $this->color;
    }

    public function setColor (string $color): void {
        $this->color = $color;
    }

    // Function GET/SET nbSeats
    public function getNbSeats(): int {
        return $this->nbSeats;
    }

    public function setNbSeats (int $nbSeats): void {
        $this->nbSeats = $nbSeats;
    }

    // Function GET/SET energy
    public function getEnergy(): string {
        return $this->energy;
    }

    public function setEnergy (string $energy): void {
        $this->energy = $energy;
    }

    // Function GET/SET energyLevel
    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }

    public function setEnergyLevel (int $energyLevel): void {
        $this->energyLevel = $energyLevel;
    }

    public function dump()
    {
        var_dump($this);
    }
}







