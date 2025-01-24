<?php

use FactoryMethod\IDCard\IDCardFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$factory = new IDCardFactory();
$card1 = $factory->create('Haruki Tazoe');
$card2 = $factory->create('Suzuki Taro');
$card3 = $factory->create('Yamada Hanako');
$card1->use();
$card2->use();
$card3->use();