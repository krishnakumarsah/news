<?php
$var = "192.168.1.1";
// $option = array(
// 	"options" => array("min_range" =>20,"max_range" =>30)
// );
if (filter_var($var,FILTER_VALIDATE_IP)) {
	echo "$var is an IP";
}else{
	echo "$var is not an IP";
}
?>