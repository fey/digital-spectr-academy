<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes;

class Square extends Shape
{
    public function __construct(private readonly float $side)
    {

    }
    public function getArea(): float {
        return pow($this->side, 2);
    }
}
