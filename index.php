<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$point = new Point(4,7);
echo "Point is: " . $point->getXY() . "<br/>";

$moveablePoint = new MoveablePoint(2,3,5,9);
$moveablePoint->setX(2);
$moveablePoint->setY(3);
$moveablePoint->setXSpeed(5);
$moveablePoint->setYSpeed(9);
echo "Start point: " . $moveablePoint . "<br/>";
$moveablePoint->move();
echo "After move 1: " . $moveablePoint . "<br/>";
$moveablePoint->move();
echo "After move 2: " . $moveablePoint . "<br/>";

