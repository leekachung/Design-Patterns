<?php

namespace dp\php\FactoryMethod;

class StdoutLogger implements Logger
{
	public function log(string $message)
	{
		echo $message;	
	}
}
