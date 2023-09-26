<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes;

abstract class Shape
{
    abstract public function getArea(): float;

    abstract public function getPerimeter(): float;
}
