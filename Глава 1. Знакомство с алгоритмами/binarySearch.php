<?php

function binarySearch(array $list, int $item): string
{
    $low = 0;
    $nigh = count($list) - 1;

    while ($low <= $nigh) {
        $mid = floor(($low + $nigh) / 2);

        $guess = $list[$mid];

        if ($guess === $item) {
            return 'Число найдено на ' . $mid . ' позиции';
        } elseif ($guess > $item) {
            $nigh = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return 'Ничего нет';
}


$myList = [2, 4, 6, 7, 10, 33, 44];

echo binarySearch($myList, 44);


