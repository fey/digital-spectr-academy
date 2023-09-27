<?php

namespace Fey\DigitalSpectrAcademy\Module1\GetWithPrefix;

// Написать функцию, которая принимает в качестве аргументов префикс
// и массив строк и возвращает все строки, начинающиеся с указанного префикса .
// Необходимо реализовать функцию наиболее оптимальным образом .
function solution(array $strings, string $prefix): array
{
    $result = [];

    foreach ($strings as $string) {
        if (str_starts_with($string, $prefix)) {
            $result[] = $string;
        }
    }

    return $result;
}

// Алтернативное решение номбер ту
function filterWithPrefix(array $strings, string $prefix): array
{
    return array_values(array_filter($strings, fn($str) => str_starts_with($str, $prefix)));
}
