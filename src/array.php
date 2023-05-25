<?php

function biggerThan5($var)
{
    return $var > 5;
}

$listNumbers = [15, 3, 6, 8, 1, 0  - 2, -5, 10, 5];
$resultList = [];
$numberItems = count($listNumbers);

echo "Use for: ";
for ($i = 0; $i < $numberItems; $i++) {
    if ($listNumbers[$i] > 5) {
        echo $listNumbers[$i] . " ";
    }
}

foreach ($listNumbers as $item) {
    if ($item > 5) {
        $resultList[] = $item;
    }
}
echo "\nUse filter: ";
$result = array_filter($resultList, 'biggerThan5');
print_r($result);

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);
echo $baseDir;