<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 27/01/2019
 * Time: 20:09
 */
include_once "Point.php";
class MoveablePoint extends Point
{public $xSpeed;
public $ySpeed;
public function __construct($x, $y,$xSpeed,$ySpeed)
{
    parent::__construct($x, $y);
    $this->xSpeed = $xSpeed;
    $this->xSpeed = $ySpeed;
}

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed(){
      $array[] = parent::getX();
      $array[] = parent::getY();
      $array[] = $this->xSpeed;
      $array[] = $this->ySpeed;
      return json_encode($array);
    }
    public function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function move(){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
    }
    public function __toString()
    {
        return $this->getSpeed();
    }

}