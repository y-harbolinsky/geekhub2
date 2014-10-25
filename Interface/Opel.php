<?php
/**
 * Created by PhpStorm.
 * User: green
 * Date: 10/24/14
 * Time: 10:39 PM
 */

require_once("Car/Car.php");

class Opel implements Car
{
    public function eatFuel()
    {
        return 'I want fuel';
    }

    public function ride()
    {
        return 'I can ride';
    }
}
