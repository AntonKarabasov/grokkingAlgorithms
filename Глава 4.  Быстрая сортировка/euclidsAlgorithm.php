<?php

function euclideanAlgorithm($a, $b)
{
    while ($a != 0 && $b != 0) {
        if ($a > $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }
    echo $a + $b;
}

euclideanAlgorithm(40, 16);