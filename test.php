<?php

function twoSum(array $nums, int $target): array
{
    $seen = []; // value => index

    foreach ($nums as $i => $num) {
        $complement = $target - $num;

        if (isset($seen[$complement])) {
            return [$seen[$complement], $i];
        }

        $seen[$num] = $i;
    }

    throw new \InvalidArgumentException('No two numbers add up to target.');
}