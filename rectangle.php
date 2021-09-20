<?php

class rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function getPerimeter()
    {
        return (($this->width + $this->height)*2);
    }
    public function display()
    {
        for ($i = 0; $i < $this->height; $i++){
            for ($j = 0; $j < $this->width; $j++){
                echo "*";
            }
            echo "</br>";
        }
    }
}