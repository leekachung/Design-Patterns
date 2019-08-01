<?php

namespace dp\php\Abstract-Factory;
class ShippableProduct implements Product
{
	private $productPrice;
	private $shippingCosts;
	public function __constrcut(int $productPrice, int $shippingCosts)
	{
		$this->productPrice = $productPrice;
		$this->shippingCosts = $shippingCosts;
	}
	public calculatePrice(): int
	{
		return $this->productPrice + $this->shippingCosts;
	}
}
