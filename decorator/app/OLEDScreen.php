<?php

namespace App;
use App\Computer;
class OLEDScreen extends LaptopDecorator {

    protected Computer $laptop;

    public function __construct(Computer $laptop)
    {
        parent::__construct($laptop);
    }

    public function getPrice(): int
    {
        return $this->laptop->getPrice() + 100;
    }

    public function getDescription(): string
    {
        return $this->laptop->getDescription() . ", with an OLED screen";
    }

}