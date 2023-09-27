<?php

namespace Fey\DigitalSpectrAcademy\Tests\Module1\ShapesApi;

use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes\Triangle;
use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{
    public function testTriangle(): void
    {
        $triangle = new Triangle(3, 4, 5);
        $this->assertSame(6.0, $triangle->getArea());
        $this->assertSame(12.0, $triangle->getPerimeter());
    }

    public function testTriangleWithFloat(): void
    {
        $triangle = new Triangle(3.0, 4.0, 5.0);
        $this->assertSame(6.0, $triangle->getArea());
        $this->assertSame(12.0, $triangle->getPerimeter());
    }
}
