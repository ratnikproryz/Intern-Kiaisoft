<?php
$arr = [15, 3,6, 8, 1, 0  - 2, -5, 10, 5];
$arr2= array();
$length = count($arr);
echo "Use for: ";
for($i=0; $i <$length; $i++){
    if($arr[$i] > 5){
        echo $arr[$i]." ";
    }
}
foreach( $arr as $item){
    if($item > 5){
        array_push($arr2, $item);
    }
}

function bigger5($var){
    return $var> 5;
}
echo "\nUse filter: ";
$result = array_filter($arr2, 'bigger5');
print_r($result);

