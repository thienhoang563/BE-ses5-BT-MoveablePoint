<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 27/01/2019
 * Time: 20:00
 */

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }


    public function getX()
    {
        return $this->x;
    }


    public function getY()
    {
        return $this->y;
    }


    public function setX($x)
    {
        $this->x = $x;
    }


    public function setY($y)
    {
        $this->y = $y;
    }

    public function getXY(){
        $array[] = $this->x;
        $array[] = $this->y;
        return json_encode($array);
    }

    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function __toString()
    {
       return $this->getXY();
    }

}