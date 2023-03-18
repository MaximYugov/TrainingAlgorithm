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
        if ($array[$i] % 2 == $array[$i - 1] % 2) {
            $result[$index][] = $array[$i];
        } else {
            $index++;
            $result[$index][] = $array[$i];
        };
    }

    return $result;
}
