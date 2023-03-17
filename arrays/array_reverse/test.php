<?php

require_once __DIR__ . "function.php";

function assertEquals(mixed $actual, mixed $expected): void
{
    echo $actual == $expected ? "PASSED" : "FAILED", PHP_EOL;
}

assertEquals(array_create_reversed([3, 4, 86, 6, 78, 7]), [7, 78, 6, 86, 4, 3]);

$source = [3, 4, 86, 6, 78, 7, "", 1, "s"];
array_reverse_reference($source);
assertEquals($source, ["s", 1, "", 7, 78, 6, 86, 4, 3]);
