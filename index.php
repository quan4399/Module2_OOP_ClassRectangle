<?php
include_once "rectangle.php";

$width = 3;
$height = 4;
$rectangle = new rectangle($width, $height);

echo "width = " . $rectangle->width."</br>";
echo "height = " . $rectangle->height."</br>";
echo "perimeter =  " .$rectangle->getPerimeter()."</br>";
echo "area = " . $rectangle->getArea()."</br>";
echo "draw rectangle" . "</br>" ;
echo $rectangle->display();