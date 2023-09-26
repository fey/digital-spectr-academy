<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes;

class Circle extends Shape
{
    public function __construct(private readonly float $radius)
    {
    }

    public function getPerimeter(): float
    {
        // NOTE: Формула расчета периметра круга:
        // C = 2 × π × r , где C это периметр, r – радиус, π – число пи.
        return 2 * M_PI * $this->radius;
    }

    public function getArea(): float
    {
        // NOTE: площадь круга
        // Формула: S = π × r2, где r — это радиус,
        // π — это константа, она приблизительно равна 3,14.
        return M_PI * pow($this->radius, 2);
    }
}
