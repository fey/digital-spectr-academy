<?php

// Нужно написать функцию, которая достаёт из массива все строковые значения.
// Необходимо учесть, что массив может быть многомерным (любой уровень вложенности),
// на выходе уже одномерный массив со всеми строковыми значениями.

function extractStrings(array $values): array
{
    $result = [];
    foreach ($values as $value) {
        if (is_array($value)) {
            $result = array_merge($result, extractStrings($value));
        } elseif (is_string($value)) {
            array_push($result, $value);
        }
    }

    return $result;
}
