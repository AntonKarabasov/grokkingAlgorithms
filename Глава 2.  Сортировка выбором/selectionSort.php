<?php

function findSmallest(array $array): int
{
    $smallest = $array[0];
    $smallestIndex = 0;

    for ($i = 1; $i < count($array); $i++) {
        if ($smallest > $array[$i]) {
            $smallest = $array[$i];
            $smallestIndex = $i;
        }
    }

    return $smallestIndex;
}

function selectionSort(array $array): array
{
    $sortedArray = [];
    $sizeArray = count($array);

    for ($i = 0; $i < $sizeArray; $i++) {
        $smallestIndex = findSmallest($array);
        $sortedArray[] = $array[$smallestIndex];
        array_splice($array, $smallestIndex, 1);
    }

    return $sortedArray;
}

var_dump(selectionSort([5, 3, 6, 2, 22, 10]));