<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <div class="container">
        Hello
    </div>
    <?php
    $a =5;
    $b = 2;
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    // Arithmetic operator
    echo "the value of a + b is :";
    echo $a + $b;
    echo "<br>";
    echo "the value of a - b is :";
    echo $a - $b;
    echo "<br>";
    echo "the value of a * b is :";
    echo $a * $b;
    echo "<br>";
    echo "the value of a / b is :";
    echo $a / $b;
    echo "<br>";
    // assignment operator

    $var = $a;
    // $var += $a;
    // $var -= $a;
    // $var *= $a;
    echo "the value of new var is:";
    echo $var;
    echo "<br>";
    echo "<br>";
    // comparison operator
    echo "the value of 1==4 is:";
    echo var_dump(1==4);
    echo "<br>";
    echo "the value of 1!=4 is:";
    echo var_dump(1!=4);
    echo "<br>";
    echo "the value of 1>=4 is:";
    echo var_dump(1>=4);
    echo "<br>";
    echo "the value of 1<=4 is:";
    echo var_dump(1<=4);
    echo "<br>";
    echo "<br>";

    //incre/decre operator

    echo $a++;
    echo "<br>";
    echo $a;
    // echo $a--;
    // echo ++$a;
    // echo --$a;
    echo "<br>";
    echo "<br>";
    // logical operator

    // and(&&)
    // or(||)
    // xor
    // !

    $Myvar = (true) and (true);
    echo var_dump($Myvar);
    echo "<br>";
    // Data types
    echo "Datatypes";
    $c = "string";
    echo "$c";
    echo "<br>";

    $c = 10;
    echo "$c";
    echo "<br>";

    $c = 10.10;
    echo "$c";
    echo "<br>";

    $c = true;
    echo "$c";
    echo "<br>";
    ?>
</body>
</html>