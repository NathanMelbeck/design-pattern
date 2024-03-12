<?php

namespace App;
use App\Computer;
class GPU extends \App\LaptopDecorator {

    protected Computer $laptop;

    public function __construct( $laptop)
    {
        parent::__construct($laptop);
    }

    public function getPrice(): int
    {
     return $this->laptop->getPrice() + 200;
    }

    public function getDescription(): string
    {
        return $this->laptop->getDescription() . ", with a GPU";
    }

}