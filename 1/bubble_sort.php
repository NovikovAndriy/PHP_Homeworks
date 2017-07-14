<?php

$arr = [9,8,5,6,7,4,3];
$iteration = count($arr)-1;
$is_swapped=false;
print_r($arr);
for($j=0; $j<$iteration; $j++) {
    for ($i=0; $i<$iteration; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$i + 1];
            $arr[$i + 1] = $temp;
            $is_swapped=true;
        }
        if (!$is_swapped){
        break;}
    }
}
print_r($arr);

echo "<br>";

$arr2 = [3,5,1,4,7,0];
$iteration = count($arr2) - 1;
print_r($arr2);
for ($j=0; $j<$iteration; $j++) {
    for ($i = count($arr2) - 1; $i > 0; $i--) {
        if ($arr2[$i] < $arr2[$i - 1]) {
            $temp = $arr2[$i];
            $arr2[$i] = $arr2[$i - 1];
            $arr2[$i - 1] = $temp;
        }
    }
}
print_r($arr2);


?>

