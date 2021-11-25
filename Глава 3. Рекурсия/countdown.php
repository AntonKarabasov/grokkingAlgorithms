<?php

function countdown(int $i): void
{
    if ($i <= 1) {
        print $i;
    } else {
        print $i . '...';
    }

    if ($i <= 1) {
        return;
    } else {
        countdown($i - 1);
    }
}

countdown(10);