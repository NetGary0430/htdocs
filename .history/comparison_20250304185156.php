<?php
# Statements to be inserted here
$zero = 0; $nil = 0; $one = 1; $upr = 'A'; $lwr = 'a';

$result = ($zero == $nil) ? 'TRUE': 'FALSE';
    echo "0 == 0 is $result <br>";
$result = ($zero == $one) ? 'TRUE' : 'FALSE';
    echo "0 == 1 is : $result <br>";
$result = ($upr == $lwr) ? 'TRUE' : 'FALSE';
    echo "A == a is : $result <br>";
$result = ($upr != $lwr) ? 'TRUE' : 'FALSE';
    echo "A != a is  $result <br>";

    $result = ($zero == $one) ? 'TRUE' : 'FALSE';
    echo "0 == 1 is : $result <br>";
$result = ($upr == $lwr) ? 'TRUE' : 'FALSE';
    echo "A == a is : $result <br>";
$result = ($upr != $lwr) ? 'TRUE' : 'FALSE';
    echo "A != a is  $result <br>";
?>