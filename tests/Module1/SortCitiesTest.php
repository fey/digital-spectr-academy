<?php

namespace Fey\DigitalSpectrAcademy\Tests\Module1\ExtractStrings;

use PHPUnit\Framework\TestCase;

use function Fey\DigitalSpectrAcademy\Module1\SortCities\solution;

class SortCitiesTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSolution(): void
    {
        $data = [
            [ 'name' => 'Пермь', 'sort' => 400 ],
            [ 'name' => 'Екб', 'sort' => 400 ],
            [ 'name' => 'Омск', 'sort' => 500 ],
            [ 'name' => 'Москва', 'sort' => 50 ],
            [ 'name' => 'Сеул', 'sort' => 0 ],
            [ 'name' => 'Сочи', 'sort' => 300 ],
        ];

        $expected = [
            [ 'name' => 'Сеул', 'sort' => 0 ],
            [ 'name' => 'Москва', 'sort' => 50 ],
            [ 'name' => 'Сочи', 'sort' => 300 ],
            [ 'name' => 'Екб', 'sort' => 400 ],
            [ 'name' => 'Пермь', 'sort' => 400, ],
            [ 'name' => 'Омск', 'sort' => 500 ],
        ];

        $this->assertEquals(($expected), solution($data));
    }
}
