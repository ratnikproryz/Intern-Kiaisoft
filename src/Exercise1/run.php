<?php

require __DIR__ .  '/../../vendor/autoload.php';

use App\Exercise1\Filter;

function biggerThan5($var)
{
    return $var > 5;
}

$filter = new Filter();
$a = [6, 3, 7, 3, 10, 1, 8];
$result = $filter->my_array_filter($a, 'biggerThan5');
var_dump($result);
