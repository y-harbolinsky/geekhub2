<?php
/**
 * Created by PhpStorm.
 * User: green*
 * Date: 10/23/14
 * Time: 5:12 PM
 */

require_once("Planet/Planet.php");

class Venus extends Planet
{
    public function movementInSpace()
    {
        return 'Venus movement in space';
    }

    public function rotationPeriod()
    {
        return 'Venus rotation period';
    }

    public function planetRotation()
    {
        return 'Venus rotation';
    }

    public function chemicalComposition()
    {
        return 'Venus chemical composition';
    }
}
