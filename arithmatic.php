<?php

$lang="PHP";
$a=50;
$b=20;

function mytest(){
    
    $l =   $GLOBALS['lang'];
    $sum = $GLOBALS['a'] + $GLOBALS['b'];
    $sub = $GLOBALS['a'] - $GLOBALS['b'];
    $mul = $GLOBALS['a'] * $GLOBALS['b'];
    $div = $GLOBALS['a'] / $GLOBALS['b'];
    $g =   $GLOBALS['a'] % $GLOBALS['b'];
    // $avg = $GLOBALS[$sum] / $GLOBALS['2'];
    
    echo $l;
    echo "<br>";
    echo "SUM is = ", $sum;
    echo "<br>";
    echo "SUB is = " ,$sub;
    echo "<br>";
    echo "MUL is = " ,$mul;
    echo "<br>";
    echo "DIV is = " ,$div;
    echo "<br>";
    echo $g;
    echo "<br>";
    // echo $avg;
}
mytest();

?>