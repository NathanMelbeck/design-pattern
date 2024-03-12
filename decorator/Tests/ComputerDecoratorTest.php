<?php

namespace Test;

use App\GPU;
use App\OLEDScreen;
use PHPUnit\Framework\TestCase;
use App\Laptop;



class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopGPU = new GPU($laptop);
        $this->assertSame(600, $laptopGPU->getPrice());
        $this->assertSame("A laptop computer, with a GPU", $laptop->getDescription());

    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopOled = new OLEDScreen($laptop);
        $this->assertSame(500, $laptopOled->getPrice());
        $this->assertSame("A laptop computer, with an OLED screen", $laptop->getDescription());

    }

    public function testLaptopWithGPUAndOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopGPU = new GPU($laptop);
        $laptopMax = new OLEDScreen($laptopGPU);
        $this->assertSame(700, $laptopMax->getPrice());
        $this->assertSame("A laptop computer, with a GPU, with an OLED screen", $laptop->getDescription());

    }
}