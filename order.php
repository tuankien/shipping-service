<?php 
namespace Order;

class Order
{
	private $products;
	private $grossPrice;

	public function __construct(array $products)
	{
		$this->products = $products;
	}

	public function getGrossPrice()
	{
		if (empty($this->products)) {
			return 0;
		}

		$totalPrice = 0;

		foreach ($this->products as $product) {
			$totalPrice += $product->getProductPrice();
		}
	}

	public function addProduct(Product $product)
	{
		array_push($this->products, $products);
	}

	public function removeProduct(Product $product) {}
}