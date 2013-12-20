<?php

namespace Pattern;


class CarWithLeatherDecorator extends BaseDecorator
{
    const EXTRA_PRICE = 340;

    public function getPrice()
    {
        return $this->car->getPrice() + self::EXTRA_PRICE;
    }
}