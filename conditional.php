<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State</title>
</head>
<body>
<?php
$age = 20;
if($age>18){
    echo "going to party";
}
else{
    echo "not going";
}
echo "<br>";

 $lang = array("c","c++","java");
// echo $lang[0];

// $a = 0;

// while($a<=10){
//     echo "<br>the value of a is :";
//     echo $a;
//     $a++;
// }

$a = 0;

while ($a<count($lang)){
    echo "<br>the value of lang is :";
    echo $lang[$a];
    $a++;
}
echo "<br>";
function Hlo(){
    echo "Five";
}
Hlo();

?>
</body>
</html>