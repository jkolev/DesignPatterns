<?php

namespace Pattern;

/**
 * Class BaseCar
 */
class BaseCar implements IDecoratedCar
{
    /** @var  int */
    private $basePrice;

    public function __construct($basePrice)
    {
        $this->basePrice = $basePrice;
    }

    /**
     * @param $price
     */
    public function setPrice($price)
    {
        $this->basePrice = $price;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->basePrice;
    }
}