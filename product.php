<?php 
namespace product;

class Product 
{
	private $amazonPrice;
	private $productWeight;
	private $productWidth;
	private $productHeight;
	private $productDepth;
	private $productType;

	public function set(int $price)
	{
		$this->amazonPrice = $price;
	}

	public function get()
	{
		return $this->amazonPrice;
	}

	public function set(int $weight)
	{
		$this->productWeight = $weight;
	}

	public function get()
	{
		return $this->productWeight;
	}

	public function set(int $width)
	{
		$this->productWidth = $width;
	}

	public function get()
	{
		return $this->productWidth;
	}

	public function set(int $height)
	{
		$this->productHeight = $height;
	}

	public function get()
	{
		return $this->productHeight;
	}

	public function set(int $depth)
	{
		$this->productDepth = $depth;
	}

	public function get()
	{
		return $this->productDepth;
	}

	public function set(string $type)
	{
		$this->productType = $type;
	}

	public function get()
	{
		return $this->productType;
	}

	public function getProductPrice() 
	{
		$totalPrice = $this->amazonPrice + $this->getShippingFee();

		return $totalPrice;
	}

	public function getShippingFee() 
	{
		return max(
			$this->calculateFeeByWeight(), 
			$this->calculateFeeByDimensions();
	}

	public function calculateFeeByWeight() 
	{
		$weightConfficient = 1;
		$feeByWeight = $this->productWeight * $weightConfficient;

		return $feeByWeight;
	}

	public function calculateFeeByDimensions() 
	{
		$dimensionConfficient = 1;
		$feeByDimensions = $this->productWidth 
							* $this->productHeight 
							* $this->productDepth 
							* $dimensionConfficient;

		return $feeByDimensions;
	}
