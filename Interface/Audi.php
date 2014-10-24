<?php
/**
 * Created by PhpStorm.
 * User: green
 * Date: 10/24/14
 * Time: 10:34 PM
 */

require_once("Car/Car.php");

class Audi implements Car
{
    private $name;

    public function __construct($name = 'Audi')
    {
        $this->name = $name;
    }

    public function eatFuel()
    {
        return $this->name . ' want\'s fuel';
    }

    public function ride()
    {
        return 'I can ride';
    }

    public function getName() {
        return $this->name;
    }
} 