<?php

namespace Pattern;

abstract class BaseDecorator implements IDecoratedCar
{
    /** @var IDecoratedCar */
    protected $car;

    /**
     * @param IDecoratedCar $car
     */
    public function __construct(IDecoratedCar $car)
    {
        $this->car = $car;
    }

    /**
     * @return int
     */
    public abstract function getPrice();
}