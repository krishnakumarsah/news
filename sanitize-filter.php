<?php
$var = "<h1>Bright Vision TechnologyÇüé</h1>";
// echo filter_var($var,FILTER_SANITIZE_STRING,FILTER_FLAG_ENCODE_AMP);
echo filter_var($var,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
?>