<?php

function personIsSeller(string $name): bool
{
    return $name[-1] == 'm';
}

function search(string $name, array $graph): string
{
    $searchQueue = [];
    $searchQueue += $graph[$name];
    $searched = [];

    while (!empty($searchQueue)) {
        $person = $searchQueue[0];
        array_splice($searchQueue, 0, 1);
        if (!in_array($person, $searched)) {
            if (personIsSeller($person)) {
                return $person . ' is a mango seller!';
            } else {
                $searchQueue = array_merge($searchQueue, $graph[$person]);
                $searched[] = $person;
            }
        }
    }

    return 'A mango seller is not found';
}

$graph["you"] = ["alice", "bob", "claire"];
$graph["bob"] = ["anuj", "peggy"];
$graph["alice"] = ["peggy"];
$graph["claire"] = ["thoms", "jonny"];
$graph["anuj"] = [];
$graph["peggy"] = [];
$graph["thoms"] = [];
$graph["jonny"] = [];

echo search("you", $graph);