<?php

namespace Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes;

abstract class Shape
{
    // NOTE: фигуры остаются чистыми и содержат только логику расчета
    abstract public function getArea(): float;
    abstract public function getPerimeter(): float;
    public static function fromParams(array $params): static
    {
        return new static(...$params);
    }
}
