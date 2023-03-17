<?php

require_once __DIR__ . "/function.php";

function assertEquals(mixed $actual, mixed $expected): void
{
    echo $actual == $expected ? "PASSED" : "FAILED", PHP_EOL;
}

assertEquals(array_split_even_odd([5, 7, 1, 6, 4, 8, 10]), [[5, 7, 1], [6, 4, 8, 10]]);

assertEquals(array_split_even_odd([5, 2, 7, 1, 6, 4, 8, 10]), [[5], [2], [7, 1], [6, 4, 8, 10]]);

assertEquals(array_split_even_odd([2, 6, 5, 4]), [[2, 6], [5], [4]]);

assertEquals(array_split_even_odd([2, 6, 5, 0, 4]), [[2, 6], [5], [0, 4]]);

assertEquals(array_split_even_odd([]), []);
