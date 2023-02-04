<?php

require_once __DIR__ . '/getStringsStartsWith.php';

$data = ['foo', 'bar', 'baz', 'test', 'qux', 'quux', 'corge'];
$actual = getStringsStartsWith($data, 'qu');
$expected = ['qux', 'quux'];

assert($actual === $expected);
