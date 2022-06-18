<?php

/**
 * Sort array of array on first element
 *
 * @param array $array
 * @return array
 */
function mySort(array $array): array
{
    usort($array, function ($item1, $item2) {
        return $item1[0] <=> $item2[0];
    });
    return $array;
}

/**
 * Display array in line
 *
 * @param array $array
 * @return void
 */
function displayArray(array $array): void
{
    echo "[";
    foreach ($array as $value) {
        echo "[" . $value[0] . "," . $value[1] . "]";
    }
    echo "]";
}


/**
 * foo() function
 *
 * @param array $array
 * @return array
 */
function foo(array $array): array
{
    $arrayTmp = [];

    // Empty state
    if (!count($array))
        return [];

    //we sort the table if not already sorted
    $array = mySort($array);

    //we init max and min with the first element of the array and we push it in the arrayTmp
    $max = max($array[0]);
    $min = min($array[0]);
    $arrayTmp[] = $array[0];

    //we loop on the array without the first element
    foreach (array_slice($array, 1) as $value) {

        //if the global max is greater or equal than the max of the current element first we slice the last element and we push a new element based on the new max and new min
        if ($max >= min($value) && $min < max($value)) {
            array_pop($arrayTmp);
            $min = min($value) > $min ? $min : min($min);
            $max = max($value) > $max ? max($value) : $max;
            $arrayTmp[] = [$min, $max];
        } else {
            $max = max($value);
            $min = min($value);
            $arrayTmp[] = $value;
        }
    }
    return $arrayTmp;
}
