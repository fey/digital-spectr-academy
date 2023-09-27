<?php

namespace Fey\DigitalSpectrAcademy\Tests\Module1\ShapesApi;

use Fey\DigitalSpectrAcademy\Module1\ShapesApi\Shapes\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    public function testSquare(): void
    {
        $triangle = new Square(1);
        $this->assertEquals(1, $triangle->getArea());
        $this->assertEquals(4, $triangle->getPerimeter());
    }

    public function testSquare2(): void
    {
        $triangle = new Square(5);
        $this->assertEquals(25, $triangle->getArea());
        $this->assertEquals(20, $triangle->getPerimeter());
    }
}
