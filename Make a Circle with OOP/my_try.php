<?php

class Circle
{

    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return $this->radius * $this->radius * pi();
    }

    public function getPerimeter()
    {
        return 2 * $this->radius * pi();
    }
}
