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
    usort($cities, fn($city) => $city['sort']);

    return $cities;
}
