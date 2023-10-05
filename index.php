<?php
echo "Hello Prachi!"."<br>";
//concatenation.
$a="India Won";
$b=" the match."."<br>";
echo $a.$b;
//variables.
$a=12;
$b=78;
echo ($a+$b)."<br/>";
//Global variable.
$x="PHP ";
$y="Is the ";
$z= "Scripting Lanaguage."."<br/>";
echo $x.$y.$z;
//$GLOBALS.
$a=300;
$b=20;
$c=0;
function Multiplication(){
    $GLOBALS['c'] = $GLOBALS['a']*$GLOBALS['b'];
}
Multiplication();
echo $c;
?>
