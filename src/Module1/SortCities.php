<?php

namespace Fey\DigitalSpectrAcademy\Module1\SortCities;

// $cities = [
//     [
//         'name' => 'Пермь',
//         'sort' => 400
//     ],
//     [
//         'name' => 'Омск',
//         'sort' => 500
//     ],
//     [
//         'name' => 'Москва',
//         'sort' => 50
//     ],
//     ...... (тут ещё много значений)
//     [
//         'name' => 'Сочи',
//         'sort' => 300
//     ],
// ];

// Необходимо написать функцию, которая на вход получает массив,
// сортирует его и возвращает отсортированный массив .
// Сортируем по ключу sort(по возрастанию), в случае равенства, сортируем по name(то есть по алфавиту) .


function solution(array $cities): array
{

    usort($cities, function ($city1, $city2) {
        $sortCompare = $city1['sort'] - $city2['sort'];

        if ($sortCompare === 0) {
            return strcmp($city1['name'], $city2['name']);
        }

        return $city1['sort'] <=> $city2['sort'];
    });

    return array_values($cities);
}
