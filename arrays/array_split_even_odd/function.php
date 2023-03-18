<?php

/**
 * Function returns array with integers divided into separate groups.
 * Condition of separation is whether it odd or even
 * 
 * @param array $array List of unsigned integers
 * @return array List of arrays containing grouped integers
 */
function array_split_even_odd(array $array): array
{
    if (empty($array)) {
        return [];
    }

    $index = 0;
    $result[$index][] = $array[0];

    for ($i = 1; $i < count($array); $i++) {
        if (($array[$i] + $array[$i - 1]) % 2 == 1) {
            $index++;
        }
        $result[$index][] = $array[$i];
    }

    return $result;
}
