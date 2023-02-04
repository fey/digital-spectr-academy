<?php

// Написать функцию, которая принимает в качестве аргументов префикс и массив строк и возвращает все строки,
// начинающиеся с указанного префикса. Необходимо реализовать функцию наиболее оптимальным образом.

function getStringsStartsWith(array $strings, string $prefix): array
{
    $result = [];

    foreach ($strings as $string) {
        if (str_starts_with($string, $prefix)) {
            $result[] = $string;
        }
    }

    return $result;
}
