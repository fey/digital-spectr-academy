<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes;

class Triangle extends Shape
{
    public function __construct(private readonly float $base, private readonly $height)
    {
    }

    public function getArea(): float {
        return ($this->height * $this->base) / 2;
    }
}
