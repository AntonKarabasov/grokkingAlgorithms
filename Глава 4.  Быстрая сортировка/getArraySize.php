<?php

function getArraySize(array $array): int
{
    if ($array === []) {
        return 0;
    } else {
        return 1 + getArraySize(array_splice($array, 1));
    }
}

echo getArraySize([4, 5, 46]);