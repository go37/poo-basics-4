<?php

class Car
{
    private bool $hasParkBrake = true;

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    // exception with throw 

    /* public function start(): string
    {
        if ($this->getParkBrake()) {
            throw new Exception("Park brake is on");
        } else {
            return "Go !";
        }
    }*/

    // exception with try / catch

    public function start(): string
    {
        try {
            if ($this->getParkBrake()) {
                throw new Exception("park brake is on.");
            }
        } catch (Exception $e) {
            echo "Exception received : " . $e->getMessage() . "<br>" . PHP_EOL;
            $this->setParkBrake(false);
        } finally {
            return  "My car rolls like a donut.";
        }
    }
}
