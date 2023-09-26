<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes;

class Circle extends Shape
{
    public function __construct(private readonly float $radius) {
    }

    public function getArea(): float
    {
        return M_PI * pow($this->radius, 2);
    }
}
