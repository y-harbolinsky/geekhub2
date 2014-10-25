<?php
/**
 * Created by PhpStorm.
 * User: green
 * Date: 10/24/14
 * Time: 10:13 PM
 */

require_once("Abstract/Earth.php");
require_once("Interface/Audi.php");

$objEarth = new Earth();

$objEarth->setName('Earth');
echo $objEarth->planetRotation();

echo '<hr>';

$objAudi = new Audi();
echo $objAudi->eatFuel() . '<br />';
echo '<br />' . Car::text;

