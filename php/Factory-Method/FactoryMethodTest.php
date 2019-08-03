<?php

namespace dp\php\FactoryMethod;
use dp\php\FactoryMethod\FileLogger;
use dp\php\FactoryMethod\FileLoggerFactory;
use dp\php\FactoryMethod\StdoutLogger;
use dp\php\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
	public function testCanCreateStdoutLogging()
	{
		$loggerFactory = new StdoutLoggerFactory();
		$logger = $loggerFactory->createLogger();
		$this->assertInstanceOf(StdoutLogger::class, $logger);
	}

	public function testCanCreateFileLogging()
	{
		$loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
		$logger = $loggerFactory->createLogger();
		$this->assertInstanceOf(FileLogger::class, $logger);
	}
}
