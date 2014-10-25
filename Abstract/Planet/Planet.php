<?php
/**
 * Created by PhpStorm.
 * User: green
 * Date: 10/23/14
 * Time: 3:21 PM
 */

abstract class Planet
{
    private $name;
    private $weight;
    private $radius;
    private $density;

    abstract public function movementInSpace();
    abstract public function rotationPeriod();
    abstract public function planetRotation();
    abstract public function chemicalComposition();


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getDensity()
    {
        return $this->density;
    }

    public function setDensity($density)
    {
        $this->density = $density;
    }
}
