<?php

function sum(array $array): int
{
    if (count($array) <= 0) {
        return 0;
    } else {
        return $array[0] + sum(array_splice($array, 1));
    }
}

echo sum([1, 3, 4]);