<?php

namespace dp\php\Abstract-Factory;
use dp\php\Abstract-Factory\DigitalProduct;
use dp\php\Abstract-Factory\ProductFactory;
use dp\php\Abstract-Factory\ShippableProduct;
use PHPUnit\Framework\TestCase;
class AbstractFactoryTest extends TestCase
{
	public function testCanCreateDigitalProduct()
	{
		$factory = new ProductFactory();
		$product = $factory->createDigitalProduct(150);
		$this->assertInstanceOf(DigitalProduct::class, $product);
	}
	public function testCanCreateShippableProduct()
	{
		$factory = new ProductFactory();
		$product = $factory->createShippableProduct(150);
		$this->assertInstanceOf(ShippableProduct::class, $product);
	}
	public function testCancCalculatePriceForDigitalProduct()
	{
		$factory = new ProductFactory();
                $product = $factory->createShippableProduct(150);
		$this->assertEquals(150, $product->calculatePrice());
	}
	public function testCanCalculatePriceForShippableProduct()
	{
		$factory = new ProductFactory();
                $product = $factory->createShippableProduct(150);
		$this->assertEquals(150, $product->calculatePrice());
	}
}
