<?php
/**
 * Created by PhpStorm.
 * User: green
 * Date: 10/23/14
 * Time: 5:10 PM
 */

require_once("Planet/Planet.php");

class Mercury extends Planet
{
    public function movementInSpace()
    {
        return $this->getName() . ' movement in space';
    }

    public function rotationPeriod()
    {
        return $this->getName() . ' rotation period';
    }

    public function planetRotation()
    {
        return $this->getName() . ' rotation';
    }

    public function chemicalComposition()
    {
        return $this->getName() . ' chemical composition';
    }
}
