<?php

$graph['start']['a'] = 6;
$graph['start']['b'] = 2;
$graph['a']['fin'] = 1;
$graph['b']['a'] = 3;
$graph['b']['fin'] = 5;
$graph['fin'] = [];

$costs['a'] = 6;
$costs['b'] = 2;
$costs['fin'] = INF;

$parents['a'] = 'start';
$parents['b'] = 'start';
$parents['fin'] = null;

function findLowestCostNode(array $costs, array $processed)
{
    $lowestCost = INF;
    $lowestCostNode = null;

    foreach ($costs as $node => $cost) {
        if ($cost < $lowestCost && !in_array($node, $processed)) {
            $lowestCost = $cost;
            $lowestCostNode = $node;
        }
    }

    return $lowestCostNode;
}

function dijkstrasAlgorithm(array $graph, array $costs, array $parents): array
{
    $processed = [];
    $node = findLowestCostNode($costs, $processed);
    while ($node !== null) {
        $cost = $costs[$node];
        $neighbors = $graph[$node];
        foreach ($neighbors as $n => $neighbor) {
            $newCost = $cost + $neighbor;
            if ($costs[$n] > $newCost) {
                $costs[$n] = $newCost;
                $parents[$n] = $node;
            }
        }
        $processed = array_merge($processed, [$node]);
        $node = findLowestCostNode($costs, $processed);
    }

    return $costs;
}

var_dump(dijkstrasAlgorithm($graph, $costs, $parents));




