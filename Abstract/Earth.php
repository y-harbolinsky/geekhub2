<?php
/**
 * Created by PhpStorm.
 * User: green
 * Date: 10/23/14
 * Time: 4:07 PM
 */

require_once("Planet/Planet.php");

class Earth extends Planet
{
    public $peoples;

    public function movementInSpace()
    {
        return $this->getName() . ' movement in space.';
    }

    public function rotationPeriod()
    {
        return $this->getName() . ' rotation period.';
    }

    public function planetRotation()
    {
        return $this->getName() . ' rotation.';
    }

    public function chemicalComposition()
    {
        return $this->getName() . ' chemical composition.';
    }
}