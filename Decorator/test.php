<?php

use Pattern\BaseCar;
use Pattern\CarWithLeatherDecorator;
use Pattern\CarWithXenonDecorator;

spl_autoload_extensions(".php");
spl_autoload_register();

$baseCar = new BaseCar(500);

$carWithXenonDecorator = new CarWithXenonDecorator($baseCar);
$price = $carWithXenonDecorator->getPrice();

echo 'With xenon lights: ' . $price;

$carWithLeatherDecorator = new CarWithLeatherDecorator($baseCar);
$price = $carWithLeatherDecorator->getPrice();

echo 'With leather seats: ' . $price;

//  or... nest them

$decoratedCar = new CarWithXenonDecorator(new CarWithLeatherDecorator($baseCar));
$price = $decoratedCar->getPrice();

echo sprintf('Price with both: %s', $price);

// OUTPUT

//  With xenon lights: 1000
//  With leather seats: 840
//  Price with both: 1340