<?php

namespace Fey\DigitalSpectrAcademy\Tests\Module1\ExtractStrings;

use PHPUnit\Framework\TestCase;

use function Fey\DigitalSpectrAcademy\Module1\ExtractStrings\solution;

class ExtractStringsTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSolution(): void
    {
        $data = [
            1,
            2,
            3,
            '3',
            'string',
            '',
            null,
            [
                [
                    3,
                    'test'
                ],
                [
                    'testtest'
                ]
            ]
        ];

        $expected = ['3', 'string', '', 'test', 'testtest'];

        $this->assertEquals($expected, solution($data));
    }
}
