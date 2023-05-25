<?php

require __DIR__ .  '/../../vendor/autoload.php';

function biggerThan5($var)
{
    return $var > 5;
}

function square($var)
{
    return $var * $var;
}

$a = [6, 3, 7, 3, 10, 1, 8];
$result = my_array_filter($a, 'biggerThan5');
var_dump($result);

$result = my_array_map($a, 'square');
var_dump($result);
