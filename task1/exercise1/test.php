<?php

require_once __DIR__ . '/sortCities.php';

$cities1 = [
    [ 'name' => 'Пермь', 'sort' => 400 ],
    [ 'name' => 'Омск', 'sort' => 500 ],
    [ 'name' => 'Москва', 'sort' => 50 ]
];
$actual1 = sortCities($cities1);
$expected1 = [

    [ 'name' => 'Москва', 'sort' => 50, ],
    [ 'name' => 'Пермь', 'sort' => 400, ],
    [ 'name' => 'Омск', 'sort' => 500, ],
];
assert($actual1 === $expected1);

$cities2 = [
    [ 'name' => 'Пермь', 'sort' => 100 ],
    [ 'name' => 'Омск', 'sort' => 100 ],
    [ 'name' => 'Москва', 'sort' => 100 ]
];
$actual2 = sortCities($cities2);
$expected2 = [
    [ 'name' => 'Москва', 'sort' => 100, ],
    [ 'name' => 'Омск', 'sort' => 100, ],
    [ 'name' => 'Пермь', 'sort' => 100, ],
];
assert($actual2 === $expected2);
