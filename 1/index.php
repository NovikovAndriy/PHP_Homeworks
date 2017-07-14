<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$name="Andrey";
echo $name;
echo "<br>";
$age="34";
echo $age;
echo "<br>";
echo "My name is $name <br>";
echo "My age is $age <br>";
if ($age >= 18 && $age<= 59) {
    echo "go to work";
}
elseif ($age >=0 && $age <=17){
    echo "relax, baby!";
}
elseif ($age >59) {
    echo "Retired";
}
else {
    echo "Error";
}
echo "<br>";
$day=rand(0,10);
var_dump ($day);

switch (true) {
    case $day >= 1 && $day <= 5:
        die ("Working Day");
    case $day >= 6 && $day <= 7:
        die ("Holiday");
    case $day < 1 && $day > 7:
        die ("Undefined");
}
echo '<br>';
$arr =[1,10,15];
$arr2=[
        'andrey'=>'Name',
    '34'=>'Age'
];
print_r ($arr2);
for ($i=0; $i<2; $i++) {
    echo $i."<br>";
}

echo '<br>';




?>
</body>
</html>
}

