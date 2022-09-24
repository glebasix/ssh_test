<?php

declare(strict_types=1);

namespace App\Task8;

/**
 * Write a PHP program to add the digits by absolute of an integer repeatedly until the result has a single digit.
 *
 * @param int $number
 * @return int
 */
function addDigits(int $number): int
{
    while (abs($number) >= 10) {
        $number = array_sum((str_split((string)abs($number))));
    }

    return $number;
}
