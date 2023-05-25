<?php

namespace App\Exercise1;

class Filter
{
    function my_array_filter(array $array, callable $callback): array
    {
        $result = [];
        foreach ($array as $item) {
            if ($callback($item)) {
                $result[] = $item;
            }
        }
        return $result;
    }
}
