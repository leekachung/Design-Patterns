<?php

namespace dp\php\FactoryMethod;

interface LoggerFactory
{
	public function createLogger(): Logger;
}
