<?php

$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];


$count = 0;
function cycle($arr)
{
    global $count;
    echo $arr[$count];
    $count++;
    if ($count < count($arr)) {
         cycle($arr);
    } else {
        unset($count);
    }
}

cycle($array);

