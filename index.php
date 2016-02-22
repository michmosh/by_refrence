<?php

$a=1;
$x=5;
function change(&$a){
    $a=$a+5;

}

echo $a."---".$x ;
echo "<hr>";

change($x);
echo $a."---".$x ;
echo "<hr>";

change($a);
echo $a."---".$x ;  
echo 123;
