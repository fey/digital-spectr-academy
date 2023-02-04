<?php

require_once __DIR__ . '/extractStrings.php';

$data = [
    'foo',
    [
        'bar',
        'baz',
        123321,
        new stdClass(),
        [
            [
                [
                    [
                        [
                            'test'
                        ]
                    ]
                ]
            ]
        ],
        [
            'qux',
            'quux'
        ]
    ],
    'corge'
];

$actual = extractStrings($data);
$expected = ['foo', 'bar', 'baz', 'test', 'qux', 'quux', 'corge'];

assert($actual === $expected);
