<?php 

namespace App;

class Product 
{
	
	private $amazonPrice;
	
	private $weight;
	
	private $width;
	
	
	private $height;
	
	private $depth;
	
	private $type;

	public function setAmazonPrice(int $amazonPrice)
	{
		$this->amazonPrice = $amazonPrice;
	}
	
	public function getAmazonPrice(): int
	{
		return $this->amazonPrice;
	}
	
	public function setWeight(int $weight)
	{
		$this->weight = $weight;
	}

	public function getWeight(): int
	{
		return $this->weight;
	}

	public function setWidth(int $width)
	{
		$this->width = $width;
	}

	public function getWidth(): int
	{
		return $this->width;
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
