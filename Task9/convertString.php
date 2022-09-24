<?php

declare(strict_types=1);

namespace App\Task9;

/**
 * Given a string where words are separated by any of the _, -, characters.
 * Write a function that converts such string to single studly caps case word.
 *
 * @param string $input
 * @return string
 */
function convertString(string $input): string
{
    $arrayClean = preg_split("/[\s_-]+/", $input);
    $result = [];

    foreach ($arrayClean as $arr) {
        $result[] = ucfirst($arr);
    }

    return implode($result);
}
