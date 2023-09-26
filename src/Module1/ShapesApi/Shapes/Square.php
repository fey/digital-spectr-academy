<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes;

class Square extends Shape
{
    public function __construct(private readonly float $side)
    {
    }

    public function getPerimeter(): float
    {
        // NOTE: Периметр квадрата равен сумме всех его сторон.
        // P = 4s, где s — длина стороны квадрата.
        return $this->side * 4;
    }

    public function getArea(): float
    {
        // NOTE: площадь квадрата находим умножением сторон
        // S = a × a = a2, где S — площадь, a — сторона.
        return pow($this->side, 2);
    }
}
