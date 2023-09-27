<?php

namespace Fey\DigitalSpectrAcademy\Tests\Module1\ShapesApi;

use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function testTriangle(): void
    {
        $circle = new Circle(1);
        $this->assertSame(M_PI, $circle->getArea());
        $this->assertSame(6.283185307179586, $circle->getPerimeter());
    }

    public function testTriangleWithFloat(): void
    {
        $circle = new Circle(1.0);
        $this->assertSame(M_PI, $circle->getArea());
        $this->assertSame(6.283185307179586, $circle->getPerimeter());
    }
}
