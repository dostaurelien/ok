<?php

require_once "Bicyle_car.php";

//BICYCLE
$bike = new Bicycle ('red');

$rider1 = new Bicycle('green');
$rider1->setCurrentSpeed(-12);
$rider1->setColor('blue');
$rider1->setName('rider1');
var_dump($rider1);

$rider2 = new Bicycle('green');
$rider2->setCurrentSpeed(13);
$rider2->setColor ("green");
$rider2->setName("rider2");


//CAR
$caisse = new Car ('red', 5, 'gazoil');
$caisse->setCurrentSpeed(100);
$caisse->setColor ('blue');
$caisse->setNbSeats (5);
$caisse->setEnergy ('gazoil');
$caisse->setEnergyLevel (100);
echo '<br>';
echo '<br>';
var_dump($caisse);
echo '<br>'. $caisse->start();
echo '<br>'. $caisse->forward();
echo '<br>'. $caisse->brake();