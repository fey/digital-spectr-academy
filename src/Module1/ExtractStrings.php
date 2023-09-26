<?php

namespace Fey\DigitalSpectrAcademy\Module1\ExtractStrings;

function solution(array $strings): array
{
    $result = [];
    foreach ($strings as $string) {
        $result = match (gettype($string)) {
            'string' => [...$result, $string],
            'array' => [...$result, ...solution($string)],
            default => $result,
        };
    }

    return $result;
}
