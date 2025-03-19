<?php
$file_name="ds.txt";
$my_file=fopen($file_name , "r");
$size = filesize($file_name);

$file_data=fread($my_file,$size);
echo $file_data;
?>