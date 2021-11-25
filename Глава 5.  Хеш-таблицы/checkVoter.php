<?php

function checkVoter(string $name): string
{
    static $voted = [];
    if (isset($voted[$name])) {
        return 'kick them out!' . "\n";
    } else {
        $voted[$name] = true;
        return 'let them vote!' . "\n";
    }
}

echo checkVoter("tom");
echo checkVoter("mike");
echo checkVoter("mike");