<?php

/**
 * Function returns reversed array
 * 
 * @param array $array Source array
 * @return array Reversed array
 */
function array_create_reversed(array $array): array
{
    $res = [];

    for ($i = count($array) - 1; $i >= 0; $i--) {
        $res[] = $array[$i];
    }

    return $res;
}

/**
 * Function reverse source array without creating new one
 * 
 * @param array &$array Source array
 * @return void
 */
function array_reverse_reference(array &$array): void
{    
    for ($i = 0; $i < intdiv(count($array), 2); $i++) {
        $tmp = $array[$i];
        $array[$i] = $array[count($array) - $i - 1];
        $array[count($array) - $i - 1] = $tmp;
    }
}
