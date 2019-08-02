<?php

namespace dp\php\Builder;
use dp\php\Builder\Parts\Vehicle;

class Director
{
	public function build(BuilderInterface $builder): Vehicle
	{
		$builder->createVehicle();
		$builder->addDoors();
		$builder->addEngine();
		$builder->addWheel();
		return $builder->getVehicle();
	}
}
