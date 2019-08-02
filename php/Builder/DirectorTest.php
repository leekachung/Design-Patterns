<?php

namespace dp\php\Builder;

use dp\php\Builder\Parts\Car;
use dp\php\Builder\Parts\Truck;
use dp\php\Builder\TruckBuilder;
use dp\php\Builder\Parts\CarBuilder;
use dp\php\Builder\Parts\Director;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
	public function testCanBuildTruck()
	{
		$truckBuilder = new TruckBuilder();
		$newVehicle = (new Director())->build($truckBuilder);
		$this->assertInstanceOf(Truck::class, $newVehicle);
	}

	public function testCanBuilderCar()
	{
		$carBuilder = new CarBuilder();
		$newVehicle = (new Diretor())->build($carBuilder);
		$this->assertInstanceOf(Car::class, $newVehicle);
	}
}
