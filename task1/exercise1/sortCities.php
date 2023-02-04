<?php

// Необходимо написать функцию, которая на вход получает массив, сортирует его и возвращает отсортированный массив.
// Сортируем по ключу sort (по возрастанию), в случае равенства, сортируем по name (то есть по алфавиту).

function sortCities(array $cities): array
{
    uasort($cities, function ($a, $b) {
        $sort = $a['sort'] <=> $b['sort'];

        if ($sort === 0) {
            return $a['name'] <=> $b['name'];
        }

        return $sort;
    });

    return array_values($cities);
}
