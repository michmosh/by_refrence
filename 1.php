<?php

$a=1;
$b=2;

function change($b,&$a){
    
    $a=$a+5;
    $b=$b+5;
    return $a.$b;
}

echo $a.'--'.$b;
echo "<hr>";
change($b, $a);
echo $a.'--'.$b;