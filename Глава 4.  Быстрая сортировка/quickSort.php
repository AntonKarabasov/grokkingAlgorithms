<?php

function quickSort(array $array): array
{
    if (count($array) < 2) {
        return $array;
    } else {
        $pivot = $array[0];
        //$less = [];
        //$greater = [];


        for ($i=1; $i < count($array); $i++) {
            if ($pivot >= $array[$i]) {
                $less[] = $array[$i];
            } else {
                $greater[] = $array[$i];
            }
        }

        return array_merge(quickSort($less), [$pivot], quickSort($greater));
    }
}

var_dump(quickSort([8, 15, 2, 22, 11]));

