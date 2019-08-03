<?php

namespace dp\php\FactoryMethod;

class FileLogger implements Logger
{
	private $filepath;
	
	public function __construct(string $filepath)
	{
		$this->filePath = $filePath
	}

	public function log(string $message)
	{
		file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
	}
}
