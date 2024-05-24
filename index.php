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
    echo "<br>"
    // comparison operator
    

    ?>
</body>
</html>