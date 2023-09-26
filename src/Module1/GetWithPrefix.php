<?php

namespace Fey\DigitalSpectrAcademy\Module1\GetWithPrefix;

// Написать функцию, которая принимает в качестве аргументов префикс
// и массив строк и возвращает все строки, начинающиеся с указанного префикса .
// Необходимо реализовать функцию наиболее оптимальным образом .

function solution(array $strings, string $prefix): array
{
    $result = [];
    $current = current($strings);
    // NOTE: не самый красивый способ, но мб эффективный
    // Проще сделать через array_filter
    while ($current = current($strings)) {
        if (str_starts_with($current, $prefix)) {
            $result[] = $current;
        }
        next($strings);
    }

    return $result;
}
