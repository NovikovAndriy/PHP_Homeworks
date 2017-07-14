<?php

$array_len = rand(4,10);
$arr = [];

for ($i=0; $i<$array_len; $i++){
    $arr [] = rand(1,100);
}
print_r ($arr);

echo '<br>'.'FOR'.'<br>';

for ($i=0; $i < 4; $i++){
    echo $i."<br>";

}
echo 'WHILE'.'<=====>'.'<br>';
$i =0;
while ($i <4) {
    echo $i.'<br>';
    $i++;
}

echo 'DO WHILE'.'<br>';

$i =0;
do {
    echo $i.'<br>';
    $i++;
    /*sleep (1);*/
}
    while ($i <4);

echo '<br>';

$arr =[
    'name'=>'Andrey',
    'age'=>34];
foreach ($arr as $index => $value){
    echo "KEY:".$index."=> VALUE:".$value."<br>";
};
$arr2 =[2,5,6,7,34,56,7676,56];

foreach ($arr2 as $value){
    echo $value.'<br>';
    }
$a=5;
$b=&$a;
$a++;

echo 'A'.$a.'<br>';
echo 'B'.$b;

echo "<br>";

$arr3 = [
    ["name" => "andr",
    "age" => 34],
    ["name" => "andr",
    "age" => 34],
["name" => "andr",
    "age" => 34]
]


?>


