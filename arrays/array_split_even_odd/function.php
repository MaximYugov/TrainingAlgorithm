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
    $result = [];

    $index = 0;
    $previousIsInSameGroup = true;

    for ($i = 0; $i < count($array); $i++) {
        if ($i > 0) {
            $previousIsInSameGroup = ($array[$i] % 2 == $array[$i - 1] % 2) ? true : false;
        }
        if ($previousIsInSameGroup) {
            $result[$index][] = $array[$i];
        } else {
            $index++;
            $result[$index][] = $array[$i];
        }
    }

    return $result;
}
