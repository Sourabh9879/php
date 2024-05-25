<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("coonection failes" . mysqli_connect_error());
}
// echo "succes";
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql ="INSERT INTO `trip` ( `name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

if($con->query($sql) ==true){
    echo "succes inserted";
}
else{
    echo "error" $con <br> $con->error;
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="pxfuel.jpg" alt="">
    <div class="cont">
        <h1>Welcome to  US Trip</h1>
        <p class="d">Enter your details</p>
        <p class="sg">Thanks for submitting the form</p>

        <form action="sub.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter name">
            <input type="text" name="age" id="age" placeholder="Enter age">
            <input type="text" name="gender" id="gender" placeholder="Enter gender">
            <input type="email" name="email" id="email" placeholder="Enter email">
            <input type="phone" name="phone" id="phone" placeholder="Enter phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <link rel="stylesheet" href="script.js">
</body>
</html>
