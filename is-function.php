<?php
$var = 500;
// echo is_int($var);
var_dump(is_int($var)) . "<br>";
if (is_int($var)) {
	echo "<br> $var is integer.";
}else{
	echo "<br> $var is not an integer.";
}
?>