<?php

namespace dp\php\FactoryMethod;

class StdoutLoggerFactory implements LoggerFactory
{
	public function createLogger(): Logger
	{
		return new StdoutLogger();
	}
}
