<?php

namespace Fey\DigitalSpectrAcademy\Tests\Module1\ExtractStrings;

use PHPUnit\Framework\TestCase;

use function Fey\DigitalSpectrAcademy\Module1\GetWithPrefix\filterWithPrefix;
use function Fey\DigitalSpectrAcademy\Module1\GetWithPrefix\solution;

class GetWithPrefixTest extends TestCase
{
    public function testSolution(): void
    {
        $data = ['Mr Robot', 'Mr. Watson', 'Ms Ivanov', '', 'Test'];

        $expected = ['Mr Robot', 'Mr. Watson'];

        $prefix = 'Mr';

        $this->assertEquals($expected, solution($data, $prefix));
        $this->assertEquals($expected, filterWithPrefix($data, $prefix));
    }

    public function testSolution2(): void
    {
        $data = ['Mr Robot', 'Mr. Watson', 'Ms Ivanov', '', 'Test'];

        $expected = [];

        $prefix = 'Mrsss';

        $this->assertEquals($expected, solution($data, $prefix));
        $this->assertEquals($expected, filterWithPrefix($data, $prefix));
    }

    public function testSolution3(): void
    {
        $data = ['Mr Robot', 'Mr. Watson', 'Ms Ivanov', '', 'Test'];

        $expected = ['Mr Robot', 'Mr. Watson', 'Ms Ivanov', '', 'Test'];

        $prefix = '';

        $this->assertEquals($expected, solution($data, $prefix));
        $this->assertEquals($expected, filterWithPrefix($data, $prefix));
    }
}
