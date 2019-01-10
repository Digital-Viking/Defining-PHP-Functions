<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

<?php

function say_Something(){

echo "Hello, how are you today?";

}

function init(){

say_Something();
    echo "<br>";
calculate();

}

function calculate(){

echo 456 + 654;

}

    init();

?>

</body>
</html>
