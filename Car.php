<?php

class Car
{
    private bool $hasParkBrake = true;

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {
        if ($this->setParkBrake() == false) {
            return "Go !";
        } else {
            throw new Exception("Park brake is on");
        }
    }
}
