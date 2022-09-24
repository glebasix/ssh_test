<?php

declare(strict_types=1);

namespace App\Task9;

function convertString(string $input): string
{
    $arrayClean = preg_split("/[\s_-]+/", $input);
    $result = [];

    foreach ($arrayClean as $arr) {
        $result[] = ucfirst($arr);
    }

    return implode($result);
}

echo convertString('The quick-brown_fox jumps over the_lazy-dog');
