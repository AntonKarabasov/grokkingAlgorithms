<?php

function findHighest(array $array)
{
    if (count($array) === 0) {
        return 'The array is empty';
    } elseif (count($array) === 1) {
        return $array[0];
    }

    if ($array[0] > $array[1]) {
        array_splice($array, 1, 1);
        return findHighest($array);
    } else {
        return findHighest(array_splice($array, 1));
    }
}

echo findHighest([]);