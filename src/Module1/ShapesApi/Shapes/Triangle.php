<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes;

class Triangle extends Shape
{
    public function __construct(
        private readonly float $sideA,
        private readonly float $sideB,
        private readonly float $sideC,
    )
    {
    }

    /**
     * Площадь треугольника через формулу Герона
     * https://ru.wikipedia.org/wiki/%D0%A4%D0%BE%D1%80%D0%BC%D1%83%D0%BB%D0%B0_%D0%93%D0%B5%D1%80%D0%BE%D0%BD%D0%B0
     * @return float
     */
    public function getArea(): float {
        $p = $this->getPerimeter() / 2;
        $a = $this->sideA;
        $b = $this->sideB;
        $c = $this->sideC;
        return sqrt(
            $p * ($p - $a) * ($p - $b) * ($p - $c)
        );
    }

    public function getPerimeter(): float
    {
        return $this->sideA + $this->sideB + $this->sideC;
    }
}
