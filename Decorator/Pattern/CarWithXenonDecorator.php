<?php

namespace Pattern;

class CarWithXenonDecorator extends BaseDecorator
{
    const EXTRA_PRICE = 500;

    public function getPrice()
    {
        return $this->car->getPrice() + self::EXTRA_PRICE;
    }
}