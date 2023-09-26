<?php

namespace Fey\DigitalSpectrAcademy\Tests\Module1\ExtractStrings;

use PHPUnit\Framework\TestCase;

use function Fey\DigitalSpectrAcademy\Module1\GetWithPrefix\solution;

class GetWithPrefixTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSolution(): void
    {
        $data = ['Mr Robot', 'Mr. Watson', 'Ms Ivanov', '', 'Test'];

        $expected = ['Mr Robot', 'Mr. Watson'];

        $this->assertEquals($expected, solution($data, 'Mr'));
    }
}
