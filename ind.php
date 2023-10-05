<?php
function add_one($num) {
 $num++;
}
function add_two($num) {
 $num+=2;
 return $num;
}
function add_three(&$num) {
 $num+=3;
}
$x = 0;
add_one($x);
add_two($x);
add_three($x);
echo $x;
?>