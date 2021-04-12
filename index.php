<?php

abstract class Product {
	protected static $price = 100;
	abstract public function getFinalPrice();
}

class DigitalProduct extends Product {
	public function getFinalPrice() {
		return self::$price/2;
	}
}

class PeiceProduct extends Product {
	public function getFinalPrice() {
		return self::$price;
	}
}

class WeightProduct extends Product {
	private $quantity;

	public function __construct() {
		$this->quantity = 0;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}

	public function getQuantity() {
		return $this->quantity;
	}

	public function getFinalPrice() {
		return $this->quantity * self::$price;
	}
}

$product1 = new DigitalProduct();
$product2 = new PeiceProduct();
$product3 = new WeightProduct();

$product3->setQuantity(5.9);

echo "Digital Product Price: {$product1->getFinalPrice()} <br/>";
echo "Peice Product Price: {$product2->getFinalPrice()} <br/>";
echo "Weight Product Price: {$product3->getFinalPrice()} <br/>";
echo "Weight Product Quantity: {$product3->getQuantity()} <br/>";

?>